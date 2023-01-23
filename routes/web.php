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

Route::get('/dashboard', function () {
    return view('dashboard');
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
Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);

// Patient page route under the middleware

Route::middleware(['pauth' => \App\Http\Middleware\PAuthenticate::class])->group(function () {
    Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
});




