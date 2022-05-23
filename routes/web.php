<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/admin/home',[App\Http\Controllers\Admin\AdminHomeController::class,'index'])->name('admin_home');

Route::get('/admin/login',[App\Http\Controllers\Admin\AdminLoginController::class,'index'])->name('admin_login');
Route::post('/admin/login_submit',[App\Http\Controllers\Admin\AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget_password',[App\Http\Controllers\Admin\AdminLoginController::class,'forget_password'])->name('admin_forget_password');

