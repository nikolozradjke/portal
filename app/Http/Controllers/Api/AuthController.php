<?php

namespace App\Http\Controllers\Api;

use App\Helper\UserMenu;
use App\Models\DetailedBudget;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'desc' => 'These credentials do not match our records'
            ], 401);
        }

        $token = $user->createToken('login_token')->plainTextToken;

        $menu = UserMenu::getMenu($user);
        if($user->role != 4){
            $agency = UserMenu::getAgencies($user->agency_id);
        }else{
            $agency = UserMenu::getAgencies($user->AgencyPermissions->toArray());
        }


        return response()->json([
            'desc' => 'Success',
            'user' => [
                'name' => $user->first_name,
                'lastname' =>  $user->last_name,
                'role' => $user->role
            ],
            'menu' => $menu,
            'agency' => $agency,
            'token' => $token
        ], 200);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'desc' => 'Success'
        ], 200);
    }
}
