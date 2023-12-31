<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdm extends Controller
{
    public function index()
    {
        $jumlahPenggunaBiasa = User::where('role', 'user')->count();
        $jumlahAdmin = User::where('role', 'admin')->count();
        $jumlahSeluruhPengguna = User::count();

        return view('dashboard-adm.index', compact('jumlahPenggunaBiasa', 'jumlahAdmin', 'jumlahSeluruhPengguna'));
    }
}
