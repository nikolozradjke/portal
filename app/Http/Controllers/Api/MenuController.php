<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();

//        if($user->role === 2){
//            $permissionedItems = $user->operatorPermissions->toArray();
//            $menu = Menu::whereIn('id', array_column($permissionedItems, 'menu_id'))->get();
//        }
        switch ($user->role) {
            case 1:
                $menu = Menu::all();
            case 2:
                $permissionedItems = $user->operatorPermissions->toArray();
                $menu = Menu::whereIn('id', array_column($permissionedItems, 'menu_id'))->get();
            case 3:

            case 4:
        }



        return response()->json([
            'items' => $menu
        ], 200);
    }
}
