<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
class UserLoginController extends Controller
{
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'name' => $user->name,
                 'email' => $user->email, // Include email in the response
            ]);
        }
        
        
    
        return response()->json([
            'status' => false,
            'message' => 'Fail'
        ]);
    }
    
       public function logout(Request $request)
       {
           Auth::logout();
   
   
           return response()->json([
               'status' => true,
               'message' => 'Logged out successfully'
           ]);
       }
}
