<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class ApiController extends Controller
{   
    //Post

    //Register API
    public function register(Request $request){
        //Data validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        //Create user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => 'User created succesfully es apsolu'
        ], 201);
    }   
    //Login API
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = Auth::user();
            $token = $user->createToken('myToken')->accessToken;

            return response()->json([
                'status' => true,
                'message' => 'Login successful es apsolu',
                'token' => $token
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ]);
        }
    }
    //Get

    //Profile API
    public function profile(){
        $user = Auth::user();

        return response()->json([
            'status' => true,
            'message' => 'User profile information',
            'data' => $user
        ]);
    }
    //Logout API
    public function logout(){
        $user = Auth::user();

        auth()->user()->token()->revoke();

        return response()->json([
            "status" => true,
            "message" => 'User logged out succesfully ja es apsolu'
        ]);
    }

}
