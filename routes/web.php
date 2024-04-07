<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFrontController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

// start admin route
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
Route::get('/admin/events/create', [App\Http\Controllers\HomeController::class, 'eventCreate'])->name('eventCreate');
Route::get('/admin/blogs/create', [App\Http\Controllers\HomeController::class, 'blogCreate'])->name('blogCreate');
Route::get('/admin/sliders/create', [App\Http\Controllers\HomeController::class, 'sliderCreate'])->name('sliderCreate');
Route::get('/admin/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/admin/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/admin/sliders', [App\Http\Controllers\HomeController::class, 'sliders'])->name('sliders');
Route::get('/admin/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


//event routes
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

//blog routes
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

//slider routes
Route::post('/sliders', [SliderController::class, 'store'])->name('slider.store');
Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');
// end admin route


// start user routes
Route::get('/', [UserFrontController::class, 'index'])->name('user.index');
Route::get('/about-us', [UserFrontController::class, 'about'])->name('user.about');
Route::get('/contact-us', [UserFrontController::class, 'contact'])->name('user.contact');
Route::get('/events', [UserFrontController::class, 'event'])->name('user.event');
Route::get('/blog-post', [UserFrontController::class, 'blog'])->name('user.blog');
Route::get('/single-blog', [UserFrontController::class, 'singleBlog'])->name('user.singleBlog');
Route::get('/single-event', [UserFrontController::class, 'singleEvent'])->name('user.singleEvent');
Route::get('/gallery', [UserFrontController::class, 'gallery'])->name('user.gallery');
// end user routes
