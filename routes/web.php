<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/',HomeController::class)->name('home');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/dashboard',DashboardController::class)->name('dashboard');
});

//Route::get('/dashboard',DashboardController::class)->middleware('auth')->name('dashboard');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',LogoutController::class)->name('logout');
