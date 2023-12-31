<?php

use App\Http\Controllers\UserAdm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdm;
use App\Http\Controllers\TvController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PdfController;

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



Route::get('/dashboard-adm', [DashboardAdm::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('dashboard-adm');

// Route::get('/dashboard-adm/users/index', function () {
//     return view('dashboard-adm.users.index');
// })->middleware(['auth', 'verified', 'admin'])->name('dashboard-adm.users.index');

use App\Http\Controllers\UserAdmController;

Route::prefix('dashboard-adm')->group(function () {
    Route::get('/users', [UserAdm::class, 'index'])->name('dashboard-adm.users.index');
    Route::post('/users', [UserAdm::class, 'store'])->name('dashboard-adm.users.store');
    Route::put('/users/{id}', [UserAdm::class, 'update'])->name('dashboard-adm.users.update');
    Route::delete('/users/{id}', [UserAdm::class, 'destroy'])->name('dashboard-adm.users.destroy');
});

// Add other routes if needed




// routes/web.php
Route::get('/movies/{id}', [MovieController::class, 'movieDetails'])->middleware(['auth', 'verified'])->name('films.film_details');
Route::get('/tv-shows/{id}', [TvController::class, 'TvDetails'])->middleware(['auth', 'verified'])->name('tv-shows.tv_details');


Route::get('/films/live-search', [MovieController::class, 'liveSearch'])->name('films.liveSearch');


Route::get('/tv-shows/live-search', [TvController::class, 'liveSearch'])->name('tv-shows.liveSearch');

Route::get('admin', function () {
    return 'Admin Page';
})->middleware('auth', 'admin');

// route github
Route::get('auth/github', [GithubController::class, 'redirect'])->name('github.login');
Route::get('auth/github/callback', [GithubController::class, 'callback'])->name('github.callback');

// export pdf
Route::get('dashboard-adm/users/PDF', [UserAdm::class, 'dataUser'])->name('users.PDF');