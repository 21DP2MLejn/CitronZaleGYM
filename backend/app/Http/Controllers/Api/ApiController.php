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
        // Data validation
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'phonenumber' => 'required|string|max:11',
            'password' => 'required|confirmed',
        ]);
    
        // Parse birthdate
        $birthdate = Carbon::parse($request->birthdate);
        
        // Check age
        $age = $birthdate->age;
    
        // Determine if guardian data is needed
        $guardianDataNeeded = $age < 18;
    
        // Create user
        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $birthdate,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Remove needs_guardian_data column
        ]);
    
        // If guardian data is needed
        if ($guardianDataNeeded) {
            // Validate and save guardian data
            $request->validate([
                'guardian_name' => 'required|string',
                'guardian_lastname' => 'required|string',
                'guardian_email' => 'required|email',
            ]);
    
            // Update user with guardian data
            $user->update([
                'guardian_name' => $request->guardian_name,
                'guardian_lastname' => $request->guardian_lastname,
                'guardian_email' => $request->guardian_email,
            ]);
    
            // Return a response indicating that guardian data has been saved
            return response()->json([
                'status' => true,
                'message' => 'User created successfully. Guardian data has been saved.',
                'user_id' => $user->id,
            ], 201);
        }
    
        // If user is 18 or older, return success response
        return response()->json([
            'status' => true,
            'message' => 'User created successfully.',
            'user_id' => $user->id,
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
        $user->token()->revoke();
        return response()->json([
            "status" => true,
            "message" => 'User logged out successfully'
        ]);
    }

// Check Login Status API
// Check Login Status API
    public function checkLoginStatus(Request $request)
    {
        // Check if the user is authenticated using Passport
        $isLoggedin = $request->user() ? true : false;

        return response()->json([
            'status' => true,
            'message' => $isLoggedin ? 'User is logged in' : 'User is not logged in',
            'isLoggedin' => $isLoggedin
        ]);
    }

    //Delete account
    public function deleteAccount(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user

        if ($user) {
            // Attempt to delete the user
            try {
                $user->delete();
                return response()->json(['message' => 'Account successfully deleted.'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Error deleting account: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['message' => 'User not found.'], 404);
    }

    //Edit profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'phonenumber' => 'required|string|max:11',
            'guardian_name' => 'nullable|string',
            'guardian_lastname' => 'nullable|string',
            'guardian_email' => 'nullable|email',
        ]);

        // Update the user details
        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => Carbon::parse($request->birthdate),
            'phonenumber' => $request->phonenumber,
            'guardian_name' => $request->guardian_name,
            'guardian_lastname' => $request->guardian_lastname,
            'guardian_email' => $request->guardian_email,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully',
            'data' => $user
        ]);
    }
}