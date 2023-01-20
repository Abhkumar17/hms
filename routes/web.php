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

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/user-login', function () {
//     return view('user-login');
// });


// front page route
Route::get('/register',[UserController::class,'register']);
Route::post('/registerP', [UserController::class,'registerP']);

Route::get('/user-login',[UserController::class,'userlogin']);
Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);


