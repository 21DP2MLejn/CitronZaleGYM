<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class ApiController extends Controller
{   
    //Post

    //Register API

    public function register(Request $request) {
        \Log::info('Incoming request data:', $request->all());
    
        // Data validation
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'phonenumber' => 'required|string|max:11',
            'password' => 'required|confirmed',
        ]);
    
        // Create user
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => Carbon::parse($request->birthdate),
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    
        return response()->json([
            "status" => true,
            "message" => 'User created successfully'
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
            "message" => 'User logged out successfully ja es apsolu'
        ]);
    }

// Check Login Status API
    public function checkLoginStatus(Request $request)
    {
        // Check if the user is authenticated using Passport
        if ($request->user()) {
            return response()->json([
                'status' => true,
                'message' => 'User is logged in',
                'isLoggedin' => true
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'User is not logged in',
                'isLoggedin' => false
            ]);
        }


    }
}