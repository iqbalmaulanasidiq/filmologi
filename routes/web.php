<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


 // Films
 Route::get('/films', function () {
    return view('films.index');
})->middleware(['auth', 'verified'])->name('films.index');

// TV Shows
Route::get('/tv-shows', function () {
    return view('tv-shows.index');
})->middleware(['auth', 'verified'])->name('tv-shows.index');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// DASHBOARD ADMIN
Route::get('/dashboard-adm', function () {
    return view('dashboard-adm');
})->middleware(['auth', 'verified'])->name('dashboard-adm');