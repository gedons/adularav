<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFrontController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

// start admin route
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
Route::get('/admin/events/create', [App\Http\Controllers\HomeController::class, 'eventCreate'])->name('eventCreate');
Route::get('/admin/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/admin/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/admin/sliders', [App\Http\Controllers\HomeController::class, 'sliders'])->name('sliders');
Route::get('/admin/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
// end admin route


// start user routes
Route::get('/', [UserFrontController::class, 'index'])->name('user.index');
Route::get('/about-us', [UserFrontController::class, 'about'])->name('user.about');
Route::get('/contact', [UserFrontController::class, 'contact'])->name('user.contact');
Route::get('/event', [UserFrontController::class, 'event'])->name('user.event');
Route::get('/single-blog', [UserFrontController::class, 'singleBlog'])->name('user.singleBlog');
Route::get('/single-event', [UserFrontController::class, 'singleEvent'])->name('user.singleEvent');
Route::get('/testimonial', [UserFrontController::class, 'testimonial'])->name('user.testimonial');
// end user routes
