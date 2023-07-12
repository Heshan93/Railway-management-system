<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\TrainController;

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
    if (session()->has('pName')) {

        return view('profile');
    }

    return view('user_login');
});

//Load login page if session is false

Route::get('profile', function () {
    if (session()->has('pName')) {

        return view('profile');
    }
    return view('user_login');
});

//Load login page if session is false

Route::get('registration', function () {
    if (session()->has('pName')) {

        return view('profile');
    }
    return view('registration');
});

//Load reports page if session is false

Route::get('reports', function () {
    if (session()->has('pName')) {

        return view('reports');
    }
    return view('admin_login');
});

//Load admin_login page if session is false
//need to change the pName to userName

Route::get('admin', function () {
    if (session()->has('pName')) {

        return view('dashboard');
    }
    return view('admin_login');
});

//Load dashboard page if session is false
//need to change the pName to userName

Route::get('dashboard', function () {
    if (session()->has('pName')) {

        return view('dashboard');
    }
    return view('admin_login');
});

//Load payment page if session is false

Route::get('payment', function () {
    if (session()->has('pName')) {

        return view('payment');
    }
    return view('user_login');
});


//Load Train Info page if session is false

Route::get('train_info', function () {
    if (session()->has('pName')) {

        return view('train_info');
    }
    return view('user_login');
});



//passenger login function
Route::post('login_user', [userController::class, 'loginUser'])->name('login_user');

//passenger registration function
Route::post('register_user', [userController::class, 'registerUser'])->name('register_user');

//passenger logout function
Route::get('logout', [userController::class, 'logoutUser']);

//get the active tickets info
Route::get('active_ticket',[TrainController::class,'getTicket']);

//get the train tracing info
Route::get('track_train/{id}',[TrainController::class,'trackTrain']);
