<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Movie\MovieController;
use App\Http\Controllers\Ticket\TicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tickets', function () {
    return view('admin.tickets');
});

Route::resource('movies', MovieController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tickets', TicketController::class);

Route::get('/movie_details', function () {
    return view('movie_detail');
});

Route::get('/dashboard', [MovieController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
