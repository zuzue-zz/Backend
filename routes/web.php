<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Movie\MovieController;
use App\Http\Controllers\Ticket\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/tickets', function () {
    return view('admin.tickets');
});

Route::resource('movies', MovieController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tickets', TicketController::class);

Route::get('/movie_details', function () {
    return view('movie_detail');
});


Route::middleware(['auth', Admin::class])->group(function () {
    Route::get('/dashboard', [MovieController::class, 'index'])->name('dashboard');
    // Add other admin-protected routes here
});
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/movie/{id}/detail',[HomeController::class,'show'])->name('movie.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
