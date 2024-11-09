<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Movie\MovieController;
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

Route::get('/movie_details', function () {
    return view('movie_detail');
});



Route::get('/dashboard', [MovieController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/movie/{id}/detail',[HomeController::class,'show'])->name('movie.show');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
