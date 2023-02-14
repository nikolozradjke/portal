<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'personal_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $this->validateWith($validator, $request);

        if(User::store($request)){
            return response()->json([
                'desc' => 'Success'
            ], 200);
        }

        return response()->json([
            'desc' => 'Something went wrong, try again!'
        ], 500);
    }
}
