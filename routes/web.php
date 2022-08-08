<?php

use App\Http\Controllers\BackgroundImageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
Route::get('/dashboard',[DashboardController::class,'view'])->name('dashboard');
Route::get('/website',[HomeController::class,'view'])->name('website');

//backgroun Image
Route::get('/list',[BackgroundImageController::class,'view'])->name('list');
Route::post('/store',[BackgroundImageController::class,'store'])->name('store');
