<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\ClientControllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('client.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard_crm', [DashboardController::class, 'dashboard_crm'])->name('dashboard_crm');
    Route::get('calender', [DashboardController::class, 'calender'])->name('calender');
});
// Route::get('sign-in', function () { return view('client.sign-in'); })->name('sign-in');
Route::prefix('client')->name('client.')->group(function () {

    Route::get('home', [MainController::class, 'home'])->name('home');
    Route::get('about', [MainController::class, 'about'])->name('about');
    Route::get('accommodation', [MainController::class, 'accommodation'])->name('accommodation');
    Route::get('gallery', [MainController::class, 'gallery'])->name('gallery');
    Route::get('contact', [MainController::class, 'contact'])->name('contact');
    Route::get('blogs', [MainController::class, 'blogs'])->name('blogs');
    Route::get('sign-in', [MainController::class, 'sign_in'])->name('sign-in');
});
