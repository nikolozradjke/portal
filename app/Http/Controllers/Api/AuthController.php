<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request){
        return response([
            'yees'
        ], 200);
    }

    public function register(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'personal_id' => $request->personal,
            'password' => Hash::make($request->password),
            'role' => $request->role,

        ]);

        $token = $user->createToken('register_token')->plainTextToken;

        return response()->json([
            'desc' => 'Success',
            'token' => $token
        ], 200);
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'desc' => 'These credentials do not match our records'
            ], 401);
        }

        $token = $user->createToken('login_token')->plainTextToken;

        return response()->json([
            'desc' => 'Success',
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
