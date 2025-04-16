<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// الصفحات الرئيسية
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destin', function () {
    return view('destin');
});

// مسارات الحجز
Route::prefix('booking')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('booking');
    Route::post('/', [BookingController::class, 'store']);
    Route::get('/confirm/{booking}', [BookingController::class, 'confirm'])
        ->name('bookings.confirm')
        ->middleware('auth');
});

Route::get('/my-bookings', [BookingController::class, 'myBookings'])
    ->name('my.bookings')
    ->middleware('auth');

// مسارات الاتصال
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

// مسارات لوحة التحكم
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])
        ->name('admin.messages.index');
        
    Route::delete('/messages/{message}', [MessageController::class, 'destroy'])
        ->name('admin.messages.destroy');
});

// مسارات المصادقة
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.register');
})->name('register');

// مسارات لوحة التحكم (Dashboard)
Route::get('/dashborde', function () {
    return view('dashborde.dashborde');
});
Route::get('/Hotel', function () {
    return view('dashborde.hotel');
});
Route::get('/Adventure', function () {
    return view('dashborde.adventure');
});
Route::get('/reservations', function () {
    return view('dashborde.reservations');
});
Route::get('/Restaurants', function () {
    return view('dashborde.restaurants');
});
Route::get('/Transport', function () {
    return view('dashborde.transport');
});
Route::get('/Messages', function () {
    return view('dashborde.Messages');
});
Route::get('/user', function () {
    return view('dashborde.user');
});