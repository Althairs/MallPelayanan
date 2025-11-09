<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $validasi = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:9'
        ]);

        if($validasi->fails()){
            return redirect()->back()
            ->withErrors($validasi)
            ->withInput();
        }

         $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

     public function showRegister()
    {
        return redirect()->route('login')->with('show_register', true);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|min:9|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput()
                ->with('show_register', true);
            }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        Auth::login($user);

        return redirect('login')->with('success', 'Registrasi berhasil! silakan login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
