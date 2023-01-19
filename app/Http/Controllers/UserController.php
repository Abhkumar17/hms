<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
