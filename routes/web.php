<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Models\User;
use illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

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


Route::get('/films', [MovieController::class, 'films'])
->middleware(['auth', 'verified'])
->name('films.index');

Route::get('/tv-shows', [MovieController::class, 'tvshows'])
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


Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
})->middleware('auth');

Route::get('/dashboard', function () {
    return 'anda login sebagai' .auth()->user()->email;
})->middleware('auth');

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->nickname,
        'email' => $githubUser->email,
        'password' => Hash::make('rahasia'),
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
 
    ]);

    Auth::login($user);
 
    return redirect('/dashboard');
});


