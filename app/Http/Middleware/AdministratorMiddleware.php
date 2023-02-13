<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $userRole = Auth::user()->role;
        if(in_array($userRole, $roles))
        {
            if($userRole === 4){
                $urlParameters = $request->route()->parameters();
                if(!empty(Auth::user()->headPermissions)){
                    $headPermissions = Auth::user()->headPermissions->toArray();
                    if($this->searchForId($urlParameters['name'], $headPermissions, 'agency_id')){
                        return $next($request);
                    }else{
                        return response()->json([
                            'message' => 'You have no permission!',
                        ], 403);
                    }
                }else{
                    return response()->json([
                        'message' => 'You have no permission!',
                    ], 403);
                }
            }

            if($userRole === 2){
                if(!empty(Auth::user()->operatorPermissions)){
                    $operatorPermissions = Auth::user()->operatorPermissions->toArray();
                    $routePrefixesArray = explode('/', request()->path());
                    $menu_id = Menu::where('route_prefix', $routePrefixesArray[1])->select('id')->first();
                    if($menu_id){
                        if($this->searchForId($menu_id->id, $operatorPermissions, 'menu_id')){
                            return $next($request);
                        }else{
                            return response()->json([
                                'message' => 'You have no permission!',
                            ], 403);
                        }
                    }else{
                        return response()->json([
                            'message' => 'You have no permission!',
                        ], 403);
                    }
                }
            }
            return $next($request);
        }

        return response()->json([
            'message' => 'You have no permission!',
        ], 403);
    }

    public function searchForId($id, $array, $column) {
       foreach ($array as $key => $val) {
           if ($val[$column] == $id) {
               return true;
           }
        }
        return false;
    }
}
