<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
 
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
//Load landing page

Route::get('/', function () {
    return view('landing_page');
});

//Load login page if session is false
 Route::get('login', function () {
    if(session()->has('pName')){

        return view('profile');

        }
       
        return view('user_login');
});

//Load login page if session is false

Route::get('profile', function () {
    if(session()->has('pName')){

        return view('profile');

        }    
        return view('user_login');
});

//Load login page if session is false

Route::get('registration', function () {
    if(session()->has('pName')){

        return view('profile');
        }    
        return view('user_login');
});


Route::view('reports', 'reports');
Route::post('login_user',[userController::class,'loginUser'])->name('login_user');
Route::post('register_user',[userController::class,'registerUser'])->name('register_user'); 
Route::view('admin','admin_login');
Route::view('dashboard','dashboard');
Route::view('payment','payment');
Route::get('logout',[userController::class,'logoutUser']);
    