<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function index(){

    return view('index');

    }

    public function contact(){
        return view('contact');
    }
    //Patients Register Page
    public function register(){
        return view('register');
    }

    //Patients login Page
    public function userlogin(){
        return view('user-login');
    }

    public function registerP(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Log the user in
        // auth()->login($user);

        return response()->json(['message' => 'Successfully registered']);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validatedData)) {
            return response()->json(['message' => 'Successfully logged in']);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
    
}
