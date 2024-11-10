<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\BookingController;
use App\Http\Controllers\Landing\PaymentController;
use App\Http\Controllers\Movie\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Showtime\ShowtimeController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);


Route::middleware(['auth', Admin::class])->group(function () {
    Route::get('/dashboard', [MovieController::class, 'index'])->name('dashboard');
    Route::resource('movies', MovieController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('showtimes', ShowtimeController::class);
});

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/movie/{id}/detail',[HomeController::class,'show'])->name('movie.show');
    Route::get('/movie/{id}/seat',[BookingController::class,'index'])->name('seat');
    Route::get('/movie/{id}/payment',[PaymentController::class,'index'])->name('payment');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
