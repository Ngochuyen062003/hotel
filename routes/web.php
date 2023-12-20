<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\RoomsController;
use App\Http\Controllers\AdminControllers\AdminBookingController;
use App\Http\Controllers\ClientControllers\MainController;
// use App\Http\Controllers\ClientControllers\BookingController;
use App\Http\Controllers\StaffControllers\HomeController;
use App\Http\Controllers\StaffControllers\BookingController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard_crm', [DashboardController::class, 'dashboard_crm'])->name('dashboard_crm');
    Route::get('dashboard_ecommerce', [DashboardController::class, 'dashboard_ecommerce'])->name('dashboard_ecommerce');
    Route::get('dashboard_logistics', [DashboardController::class, 'dashboard_logistics'])->name('dashboard_logistics');
    Route::get('dashboard_academy', [DashboardController::class, 'dashboard_academy'])->name('dashboard_academy');
    Route::get('calender', [DashboardController::class, 'calender'])->name('calender');
    Route::get('login', [DashboardController::class, 'login'])->name('login');
    Route::get('register', [DashboardController::class, 'register'])->name('register');
    Route::get('list-rooms', [RoomsController::class, 'list'])->name('list-rooms');
    Route::get('add-room', [RoomsController::class, 'add'])->name('add-room');
    Route::post('add-room', [RoomsController::class, 'postAddRoom'])->name('postAdd');
    Route::get('update-room/{id}', [RoomsController::class, 'getRoomId'])->name('form-update');
    Route::post('update-room/{id}', [RoomsController::class, 'postUpdateRoom'])->name('postUpdateRoom');
    Route::get('delete-room/{id}', [RoomsController::class, 'deleteRoom'])->name('del-room');
    Route::get('list-bookings', [AdminBookingController::class, 'list'])->name('list-bookings');
    Route::get('update-booking/{id}', [AdminBookingController::class, 'getBookingId'])->name('form-update-booking');
    Route::post('update-booking/{id}', [AdminBookingController::class, 'postUpdateBooking'])->name('postUpdateBooking');
});

Route::prefix('client')->name('client.')->group(function () {
    Route::get('home', [MainController::class, 'home'])->name('home');
    // Route::get('booking', [BookingController::class, 'booking'])->name('booking');
    Route::get('about', [MainController::class, 'about'])->name('about');
    Route::get('accommodation', [MainController::class, 'accommodation'])->name('accommodation');
    Route::get('gallery', [MainController::class, 'gallery'])->name('gallery');
    Route::get('contact', [MainController::class, 'contact'])->name('contact');
    Route::get('blogs', [MainController::class, 'blogs'])->name('blogs');
    Route::get('sign-in', [MainController::class, 'sign_in'])->name('sign-in');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service-detail', [HomeController::class, 'service_detail'])->name('service-detail');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-detail', [HomeController::class, 'blog_detail'])->name('blog-detail');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/room-detail', [HomeController::class, 'room_detail'])->name('room-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/sign-in', [HomeController::class, 'sign_in'])->name('sign-in');
Route::get('/sign-up', [HomeController::class, 'sign_up'])->name('sign-up');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'postAddBooking'])->name('postAddBooking');
Route::get('/booking-done', [HomeController::class, 'booking_done'])->name('booking-done');
