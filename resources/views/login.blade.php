@extends('layout.main')
@section('kontent')
    <div class="w-full min-h-auto bg-white flex flex-col justify-left text-black p-10 mt-16 text-center">
        <div class="max-w-auto py-6">
            <h1 class="text-5xl font-bold mb-4 text-center">Layanan Perizinan</h1>
            <p class="text-lg text-center">Berbagai jenis layanan perizinan dan investasi yang mudah, cepat, dan terpercaya
            </p>
        </div>
    </div>
    <div class="w-full min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-4xl">

            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-2xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Akses Portal Layanan</h2>
                    <p class="text-gray-600">Masuk ke akun Anda atau daftar untuk mengajukan permohonan perizinan</p>
                </div>

                <!-- Tab Navigation -->
                <div class="flex border-b border-gray-200 mb-8">
                    <button id="login-tab"
                        class="tab-btn {{ !session('show_register') ? 'active text-blue-600 border-blue-600' : 'text-gray-500 border-transparent' }} flex-1 py-4 px-6 text-center font-semibold transition duration-300">
                        Masuk
                    </button>
                    <button id="register-tab"
                        class="tab-btn {{ session('show_register') ? 'active text-blue-600 border-blue-600' : 'text-gray-500 border-transparent' }} flex-1 py-4 px-6 text-center font-semibold transition duration-300">
                        Daftar
                    </button>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Login Form -->
                <div id="login-form" class="form-content {{ !session('show_register') ? 'active' : 'hidden' }}">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <!-- Email -->
                            <div>
                                <label for="login-email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="login-email" name="email" placeholder="nama@email.com"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="login-password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <input type="password" id="login-password" name="password" placeholder="••••••••"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                @error('password')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Lupa Password -->
                            <div class="text-right">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Lupa password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition duration-300">
                                Masuk
                            </button>
                        </div>
                    </form>

                    <!-- Informasi Penting -->
                    <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                        <h4 class="font-semibold text-gray-800 mb-3">Informasi Penting:</h4>
                        <ul class="text-sm text-gray-700 space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Pastikan data yang Anda masukkan sudah benar</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Gunakan email aktif untuk verifikasi akun</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Simpan informasi login Anda dengan aman</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Hubungi admin jika mengalami kesulitan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Register Form -->
                <div id="register-form" class="form-content {{ session('show_register') ? 'active' : 'hidden' }}">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="register-nama" class="block text-sm font-medium text-gray-700 mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="register-nama" name="name" placeholder="Nama lengkap Anda"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="register-email"
                                    class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="register-email" name="email" placeholder="nama@email.com"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Nomor Telepon -->
                            <div>
                                <label for="register-telepon" class="block text-sm font-medium text-gray-700 mb-2">Nomor
                                    Telepon</label>
                                <input type="tel" id="register-telepon" name="phone" placeholder="08xxxxxxxxxx"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="register-password"
                                    class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <input type="password" id="register-password" name="password" placeholder="••••••••"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                @error('password')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Konfirmasi Password -->
                            <div>
                                <label for="register-password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                                <input type="password" id="register-password_confirmation" name="password_confirmation" placeholder="••••••••"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition duration-300">
                                Daftar
                            </button>
                        </div>
                    </form>

                    <!-- Informasi Penting -->
                    <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                        <h4 class="font-semibold text-gray-800 mb-3">Informasi Penting:</h4>
                        <ul class="text-sm text-gray-700 space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Pastikan data yang Anda masukkan sudah benar</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Gunakan email aktif untuk verifikasi akun</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Simpan informasi login Anda dengan aman</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Hubungi admin jika mengalami kesulitan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            // Check if we should show register tab by default
            const shouldShowRegister = {{ session('show_register') || $errors->hasAny(['name', 'email', 'phone', 'password']) && !$errors->hasAny(['login-email', 'login-password']) ? 'true' : 'false' }};

            if (shouldShowRegister) {
                showRegisterTab();
            }

            loginTab.addEventListener('click', showLoginTab);
            registerTab.addEventListener('click', showRegisterTab);

            function showLoginTab() {
                // Update tabs
                loginTab.classList.add('active', 'text-blue-600', 'border-blue-600');
                loginTab.classList.remove('text-gray-500', 'border-transparent');
                registerTab.classList.remove('active', 'text-blue-600', 'border-blue-600');
                registerTab.classList.add('text-gray-500', 'border-transparent');

                // Update forms
                loginForm.classList.remove('hidden');
                loginForm.classList.add('active');
                registerForm.classList.add('hidden');
                registerForm.classList.remove('active');
            }

            function showRegisterTab() {
                // Update tabs
                registerTab.classList.add('active', 'text-blue-600', 'border-blue-600');
                registerTab.classList.remove('text-gray-500', 'border-transparent');
                loginTab.classList.remove('active', 'text-blue-600', 'border-blue-600');
                loginTab.classList.add('text-gray-500', 'border-transparent');

                // Update forms
                registerForm.classList.remove('hidden');
                registerForm.classList.add('active');
                loginForm.classList.add('hidden');
                loginForm.classList.remove('active');
            }
        });
    </script>

    <style>
        .tab-btn.active {
            border-bottom-width: 2px;
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
        }
    </style>
@endsection
