<?php

use App\Http\Controllers\AboutController;
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
Route::get('/',[DashboardController::class,'view'])->name('dashboard');
Route::get('/website',[HomeController::class,'view'])->name('website');

//backgroun Image
Route::get('/list',[BackgroundImageController::class,'view'])->name('list');
Route::post('/store',[BackgroundImageController::class,'store'])->name('BackgroundImage.store');
Route::get('/delete-bgimage/{id}',[BackgroundImageController::class,'delete'])->name('BackgroundImage.delete');

//contact
Route::get('/contact-list',[ContactController::class,'view'])->name('contact-list');
Route::post('/contact-store',[ContactController::class,'store'])->name('contact-store');

//achivement
Route::get('/achivement-list',[AchivementController::class,'view'])->name('achivement-list');
Route::post('/achivement-store',[AchivementController::class,'store'])->name('achivment.store');
Route::get('/achivement-list/edit/{id}',[AchivementController::class,'Edit'])->name('achivement.edit');
Route::get('/delete-achivement/{id}',[AchivementController::class,'delete'])->name('acivement.delete');
Route::put('/update-achivement/{id}',[AchivementController::class,'update'])->name('acivement.update');

//about
Route::get('/about-list',[AboutController::class,'view'])->name('about-list');
Route::post('/about-store',[AboutController::class,'store'])->name('about.store');
Route::get('/about-list/edit/{id}',[AboutController::class,'Edit'])->name('about.edit');
Route::get('/delete-about/{id}',[AboutController::class,'delete'])->name('about.delete');
Route::put('/update-about/{id}',[AboutController::class,'update'])->name('about.update');


//Blogs
Route::get('/blogs-list',[BlogsController::class,'view'])->name('blogs-list');
Route::post('/blogs-store/tv',[BlogsController::class,'store'])->name('blogs.store');
Route::get('/blogs-list/shows',[BlogsController::class,'viewShow'])->name('show-list');
Route::post('/blogs-store/shows',[BlogsController::class,'storeShows'])->name('blogs.store.shows');
Route::get('/blogs-list/awards',[BlogsController::class,'viewAwards'])->name('awards-list');
Route::post('/blogs-store/Awards',[BlogsController::class,'storeAwards'])->name('blogs.store.awards');
Route::get('/delete-blogs/{id}',[BlogsController::class,'delete'])->name('blogs.delete');
Route::get('/delete-awards-blogs/{id}',[BlogsController::class,'deleteAwards'])->name('awards.delete');
Route::get('/delete-show-blogs/{id}',[BlogsController::class,'deleteShows'])->name('shows.delete');

