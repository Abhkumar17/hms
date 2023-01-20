<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

// Route::get('/user-login', function () {
//     return view('user-login');
// });


// front page route
Route::get('/register',[UserController::class,'register']);
Route::post('/registerP', [UserController::class,'registerP']);
Route::get('/user-login',[UserController::class,'userlogin']);
Route::post('/login', [UserController::class,'login']);
Route::get('/logout', [UserController::class,'logout']);
Route::get('/dashboard',[UserController::class,'dashboard']);
Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);


