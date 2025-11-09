@extends('layout.main')
@section('kontent')
    <div class="w-full min-h-auto bg-blue-900 flex flex-col justify-left text-white p-10 mt-16">
        <div class="max-w-2xl py-6">
            <h1 class="text-5xl font-bold mb-4 text-left">Layanan Perizinan</h1>
            <p class="text-lg text-left">Berbagai jenis layanan perizinan dan investasi yang mudah, cepat, dan terpercaya
            </p>
        </div>
    </div>
    <div class="w-full min-h-screen bg-gray-50 py-12">

        <div class="container mx-auto px-4 max-w-6xl">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Informasi Kontak - Kiri -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                    <p class="text-gray-600 mb-8">Hubungi kami melalui saluran berikut</p>

                    <div class="space-y-6">
                        <!-- Telepon -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-phone text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Telepon</h4>
                                <p class="text-gray-700 mb-1">1500-164</p>
                                <p class="text-gray-600 text-sm">(021) 1500-164 (Non Telkomsel)</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Email</h4>
                                <p class="text-gray-700 mb-1">info@dpmptsp.go.id</p>
                                <p class="text-gray-700">pengaduan@dpmptsp.go.id</p>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Alamat</h4>
                                <p class="text-gray-700">Kantor DPMPTSP Kabupaten Bone Bolango</p>
                                <p class="text-gray-700">Bone Bolango, Gorontalo, Indonesia</p>
                            </div>
                        </div>

                        <!-- Jam Layanan -->
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-orange-600"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Jam Layanan</h4>
                                <div class="space-y-1">
                                    <p class="text-gray-700">Senin - Kamis: 08:00 - 16:00</p>
                                    <p class="text-gray-700">Jumat: 08:00 - 16:30</p>
                                    <p class="text-red-500">Sabtu & Minggu: Tutup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kirim Pesan - Kanan -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                    <p class="text-gray-600 mb-8">Isi formulir di bawah ini untuk menghubungi kami</p>

                    <form action="#" method="POST">
                        <div class="space-y-6">
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap
                                    *</label>
                                <input type="text" id="nama" name="nama" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>

                            <!-- No. Telepon -->
                            <div>
                                <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">No.
                                    Telepon</label>
                                <input type="tel" id="telepon" name="telepon"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>

                            <!-- Subjek -->
                            <div>
                                <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">Subjek *</label>
                                <input type="text" id="subjek" name="subjek" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>

                            <!-- Pesan -->
                            <div>
                                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                                <textarea id="pesan" name="pesan" rows="5" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition duration-300">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
