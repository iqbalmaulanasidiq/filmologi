<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [MovieController::class, 'index'])->name('movies.index');

Route::get('/test', function () {
    return view('test');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [MovieController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


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
    return view('dashboard-adm.index');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/dashboard-adm/users/index', function () {
    return view('dashboard-adm.users.index');
})->middleware(['auth', 'verified'])->name('dashboard-adm.users.index');

Route::get('/dashboard-adm/role/index', function () {
    return view('dashboard-adm.role.index');
})->middleware(['auth', 'verified'])->name('dashboard-adm.role.index');