<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [IndexController::class, 'index'])->name('movies.index');
// Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::get('/test', function () {
    return view('test');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/films', [MovieController::class, 'films'])
->middleware(['auth', 'verified'])
->name('films.index');

Route::get('/tv-shows', [TvController::class, 'tvshows'])
->middleware(['auth', 'verified'])
->name('tv-shows.index');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

// DASHBOARD ADMIN
Route::get('/dashboard-adm', function () {
    return view('dashboard-adm.index');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/dashboard-adm/users/index', function () {
    return view('dashboard-adm.users.index');
})->middleware(['auth', 'verified'])->name('dashboard-adm.users.index');

Route::get('/dashboard-adm/role/index', function () {
    return view('dashboard-adm.role.index');
})->middleware(['auth', 'verified'])->name('dashboard-adm.role.index');


// routes/web.php
Route::get('/movies/{id}', [MovieController::class, 'movieDetails'])->middleware(['auth', 'verified'])->name('films.film_details');
Route::get('/tv-shows/{id}', [TvController::class, 'TvDetails'])->middleware(['auth', 'verified'])->name('tv-shows.tv_details');


Route::get('/films/live-search', [MovieController::class, 'liveSearch'])->name('films.liveSearch');


Route::get('/tv-shows/live-search', [TvController::class, 'liveSearch'])->name('tv-shows.liveSearch');