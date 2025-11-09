<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home',[
            'judul'=>'home'
        ]);
    }

    // Dashboard setelah login
    public function dashboard()
    {
        $user = Auth::user();
        return view('user.dashboard', compact('user'),[
            'judul'=>'dashboard'
        ]);
    }

    public function tentang()
    {
        return view('tentang',[
            'judul'=>'Tentang'
        ]);
    }

    public function layanan()
    {
        return view('layanan',[
            'judul'=>'Layanan'
        ]);
    }

    public function kontak()
    {
        return view('kontak',[
            'judul'=>'kontak'
        ]);
    }


}
