<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFrontController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [UserFrontController::class, 'index'])->name('user.index');
Route::get('/about-us', [UserFrontController::class, 'about'])->name('user.about');
Route::get('/contact', [UserFrontController::class, 'contact'])->name('user.contact');
Route::get('/event', [UserFrontController::class, 'event'])->name('user.event');
Route::get('/single-blog', [UserFrontController::class, 'singleBlog'])->name('user.singleBlog');
Route::get('/single-event', [UserFrontController::class, 'singleEvent'])->name('user.singleEvent');
Route::get('/testimonial', [UserFrontController::class, 'testimonial'])->name('user.testimonial');

