<?php

use App\Http\Controllers\AchivementController;
use App\Http\Controllers\BackgroundImageController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadImageController;
use App\Models\Achivement;
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
Route::post('/store',[BackgroundImageController::class,'store'])->name('BackgroundImage.store');
Route::get('/delete-bgimage/{id}',[BackgroundImageController::class,'delete'])->name('BackgroundImage.delete');

//contact
Route::get('/contact-list',[ContactController::class,'view'])->name('contact-list');
Route::post('/contact-store',[ContactController::class,'store'])->name('contact-store');

//contact
Route::get('/achivement-list',[AchivementController::class,'view'])->name('achivement-list');
Route::post('/achivement-store',[AchivementController::class,'store'])->name('achivment.store');
Route::get('/delete-achivement/{id}',[AchivementController::class,'delete'])->name('acivement.delete');

//Blogs
Route::get('/blogs-list',[BlogsController::class,'view'])->name('blogs-list');
Route::post('/blogs-store',[BlogsController::class,'store'])->name('blogd.store');
Route::get('/delete-blogs/{id}',[BlogsController::class,'delete'])->name('blogs.delete');


