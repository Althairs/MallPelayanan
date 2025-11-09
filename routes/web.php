<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class,'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); 
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/tentang', [DashboardController::class, 'tentang'])->name('tentang');

Route::get('/layanan', [DashboardController::class, 'layanan'])->name('layanan');

Route::get('/kontak', [DashboardController::class, 'kontak'])->name('kontak');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});


Route::get('/perizinan', function(){
    return view('perizinan-penelitian',[
        'judul' => 'Layanan'
    ]);
})->name('perizinan');






