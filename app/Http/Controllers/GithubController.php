<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            $user = User::updateOrCreate(
                ['email' => $githubUser->getEmail()],
                [
                    'name' => $githubUser->getName(),
                    'username' => $githubUser->getNickname(),
                    'profile_image' => $githubUser->getAvatar(),
                    'github_token' => $githubUser->token,
                    'auth_type' => 'github',
                    'password' => Hash::make(Str::random(10)),
                ]
            );

            auth()->login($user, true);

            return redirect()->to('/dashboard'); // Ganti ini sesuai rute tujuan setelah login

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            // Handle InvalidStateException, mungkin dengan melakukan redirect ke halaman login.
            return redirect()->route('login')->with('error', 'Gagal melakukan autentikasi dengan GitHub. Silakan coba lagi.');
        } catch (\Throwable $e) {
            // Handle Exception
            return redirect()->route('login')->with('error', 'Gagal melakukan autentikasi dengan GitHub. Silakan coba lagi.');
        }
    }
}
