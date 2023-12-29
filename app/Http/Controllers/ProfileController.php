<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Mengambil data validasi
        $validatedData = $request->validated();

        // Cek dan simpan gambar profil baru
        if ($request->hasFile('profile_image')) {
            $profileImage = $request->file('profile_image');
            $profileImageFileName = uniqid('profile_image_') . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->storeAs('public/profile_images', $profileImageFileName);

            // Hapus gambar profil lama sebelum menyimpan yang baru
            Storage::delete('public/profile_images/' . $user->profile_image);

            // Simpan nama file gambar ke dalam database
            $validatedData['profile_image'] = $profileImageFileName;
        }

        // Mengisi data yang diubah
        $user->fill($validatedData);

        // Jika alamat email diubah, reset verifikasi email
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        // Hapus gambar profil sebelum menghapus pengguna
        Storage::delete('public/profile_images/' . $user->profile_image);

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
