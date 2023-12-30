<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserAdm extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard-adm.users.index', compact('users'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8',
        'role' => 'required|in:admin,user',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->role = $request->role;

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/profile_images', $imageName);
        $user->profile_image = $imageName;
    } else {
        // If no profile_image is uploaded, use default.jpg
        $user->profile_image = 'default.jpg';
    }

    $user->save();

    return redirect()->route('dashboard-adm.users.index')->with('success', 'User added successfully.');
}


    public function update(Request $request, $id)
{
    // Menggunakan fungsi validate untuk melakukan validasi
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $id,
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
        'role' => 'required|in:admin,user',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->role = $request->role;

    if ($request->hasFile('profile_image')) {
        // Hapus gambar lama jika ada
        Storage::delete('public/profile_images/' . $user->profile_image);

        // Simpan gambar baru
        $profileImage = $request->file('profile_image');
        $profileImageName = time() . '_' . $profileImage->getClientOriginalName();
        $profileImage->storeAs('public/profile_images', $profileImageName);

        $user->profile_image = $profileImageName;
    }

    $user->save();

    return redirect()->route('dashboard-adm.users.index')->with('success', 'User updated successfully.');
}


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Delete profile image
        if ($user->profile_image) {
            Storage::delete('public/profile_images/' . $user->profile_image);
        }

        $user->delete();

        return redirect()->route('dashboard-adm.users.index')->with('success', 'User deleted successfully.');
    }
}
