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

Route::get('/', function () {
    return view('landing_page');
});


Route::view('profile','profile');
Route::view('reports', 'reports');
Route::get('login',[userController::class,'userLogin']);
Route::get('registration',[userController::class,'userRegister']);
Route::view('admin','admin_login');
Route::view('dashboard','dashboard');
Route::view('payment','payment');
//Route::get('profile',[userController::class,'viewUser']);