<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFrontController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\HomeImageController;
use App\Http\Controllers\HomeSliderController;


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

Route::get('/admin/jumbotron/create', [App\Http\Controllers\HomeController::class, 'jumbotronCreate'])->name('jumbotronCreate');
Route::get('/admin/home_images/create', [App\Http\Controllers\HomeController::class, 'homeimageCreate'])->name('homeimageCreate');
Route::get('/admin/home_sliders/create', [App\Http\Controllers\HomeController::class, 'homesliderCreate'])->name('homesliderCreate');

Route::get('/admin/jumbotrons', [App\Http\Controllers\HomeController::class, 'jumbotrons'])->name('jumbotrons');
Route::get('/admin/home_sliders', [App\Http\Controllers\HomeController::class, 'home_sliders'])->name('home_sliders');
Route::get('/admin/home_images', [App\Http\Controllers\HomeController::class, 'home_images'])->name('home_images');

Route::get('/admin/galleries/create', [App\Http\Controllers\HomeController::class, 'galleryCreate'])->name('galleryCreate');
Route::get('/admin/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/admin/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/admin/sliders', [App\Http\Controllers\HomeController::class, 'sliders'])->name('sliders');
Route::get('/admin/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::delete('/contact/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/message/{contact}/view', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/{contact}', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.email');


//event routes
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

//blog routes
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
// Route::get('/blog/{blog}', [UserFrontController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

//slider routes
Route::post('/sliders', [SliderController::class, 'store'])->name('slider.store');
Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');

//gallery routes
Route::post('/galleries', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');
Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

//admin update details
Route::get('/admin/profile', [AdminController::class, 'edit'])->middleware('auth')->name('admin.profile');
Route::put('/admin/profile', [AdminController::class, 'update'])->middleware('auth')->name('admin.profile.update');

//admin booking
Route::delete('/booking/{booking}', [BookingController::class, 'destroy'])->middleware('auth')->name('booking.destroy');
Route::get('/booking/{booking}', [BookingController::class, 'show'])->middleware('auth')->name('booking.show');
Route::post('/booking/{booking}', [BookingController::class, 'sendEmail'])->middleware('auth')->name('booking.email');

//admin jumbotron
Route::delete('/jumbotron/{jumbotron}', [JumbotronController::class, 'destroy'])->middleware('auth')->name('jumbotron.destroy');
Route::post('/jumbotron', [JumbotronController::class, 'store'])->middleware('auth')->name('jumbotron.store');

//admin home slider
Route::delete('/home_slider/{home_slider}', [HomeSliderController::class, 'destroy'])->middleware('auth')->name('home_slider.destroy');
Route::post('/home_slider', [HomeSliderController::class, 'store'])->middleware('auth')->name('home_slider.store');
Route::get('/home_slider/{home_slider}/edit', [HomeSliderController::class, 'edit'])->name('home_slider.edit');
Route::put('/home_slider/{home_slider}', [HomeSliderController::class, 'update'])->name('home_slider.update');

//admin home image
Route::delete('/home_image/{home_image}', [HomeImageController::class, 'destroy'])->middleware('auth')->name('home_image.destroy');
Route::post('/home_image', [HomeImageController::class, 'store'])->middleware('auth')->name('home_image.store');
Route::get('/home_image/{home_image}/edit', [HomeImageController::class, 'edit'])->name('home_image.edit');
Route::put('/home_image/{home_image}', [HomeImageController::class, 'update'])->name('home_image.update');
// end admin route


// start user routes
Route::get('/', [UserFrontController::class, 'index'])->name('user.index');
Route::get('/about-us', [UserFrontController::class, 'about'])->name('user.about');
Route::get('/contact-us', [UserFrontController::class, 'contact'])->name('user.contact');
Route::post('/contact-send', [UserFrontController::class, 'send'])->name('contact.send');
Route::get('/events', [UserFrontController::class, 'event'])->name('user.event');
Route::get('/blog-post', [UserFrontController::class, 'blog'])->name('user.blog');
Route::get('/single-blog/{blog}', [UserFrontController::class, 'singleBlog'])->name('user.singleBlog');
Route::get('/single-event/{event}', [UserFrontController::class, 'singleEvent'])->name('user.singleEvent');
Route::get('/gallery', [UserFrontController::class, 'gallery'])->name('user.gallery');
Route::get('/book-now', [UserFrontController::class, 'book'])->name('user.book');
Route::post('/bookings', [BookingController::class, 'create'])->name('booking.create');

// end user routes
