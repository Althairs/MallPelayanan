@extends('layout.main')
@section('kontent')
    <div class="w-full min-h-screen bg-blue-900 flex flex-col items-center justify-center text-white">
        <div class="text-center max-w-2xl mx-auto px-4">
            <h1 class="text-6xl font-bold mb-4">Selamat Datang</h1>
            <h2 class="text-4xl mb-6">di Mal Pelayanan Publik (MPP) Digital</h2>
            <h3 class="text-xl mb-8 text-green-400">Bone Bolango</span></h3>
            <p class="text-lg">Urus izin sendiri lebih mudah secara digital</p>
        </div>
    </div>
    <div class="w-full min-h-screen bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">IZIN TERPOPULER</h2>
                <p class="text-lg text-gray-600">Layanan perizinan yang paling banyak diakses</p>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
                <!-- Card 1: SIP -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-10">
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">SIP</h3>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Izin Praktik Dokter</h4>
                        <br>
                        <p class="text-gray-600 mb-4">Surat Izin Praktik untuk dokter umum dan spesialis</p>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md flex items-center justify-center w-full">
                            Urus Sekarang
                        </button>
                    </div>
                </div>

                <!-- Card 2: SIPNAKES -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-10">
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">SIPNAKES</h3>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Izin Praktik Perawat</h4>
                        <br>
                        <p class="text-gray-600 mb-4">Surat Izin Praktik untuk tenaga keperawatan</p>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md flex items-center justify-center w-full">
                            Urus Sekarang
                        </button>
                    </div>
                </div>

                <!-- Card 3: PM1 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-10">
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">PM1</h3>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Perizinan Penelitian</h4>
                        <br>
                        <p class="text-gray-600 mb-4">Izin penelitian untuk mahasiswa dan akademisi</p>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md flex items-center justify-center w-full">
                            Urus Sekarang
                        </button>
                    </div>
                </div>

                <!-- Card 4: IMB -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-10">
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">IMB</h3>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Izin Mendirikan Bangunan</h4>
                        <br>
                        <p class="text-gray-600 mb-4">Perizinan untuk pembangunan dan renovasi bangunan</p>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md flex items-center justify-center w-full">
                            Urus Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full min-h-screen bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Perizinan</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Berbagai layanan perizinan dan investasi untuk mendukung kemudahan berusaha
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-12">
                <!-- Service 1 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-flask text-blue-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Perizinan Penelitian</h3>
                    <p class="text-gray-600">Izin penelitian mahasiswa dan akademisi untuk keperluan riset dan penelitian
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user-md text-green-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Kesehatan</h3>
                    <p class="text-gray-600">Izin praktik untuk dokter, perawat, bidan, dan tenaga kesehatan lainnya</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-briefcase text-purple-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Usaha</h3>
                    <p class="text-gray-600">Pengurusan izin usaha dan investasi untuk berbagai jenis usaha</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-hard-hat text-orange-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Mendirikan Bangunan</h3>
                    <p class="text-gray-600">Pengurusan IMB untuk pembangunan dan renovasi bangunan</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-cogs text-red-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Operasional</h3>
                    <p class="text-gray-600">Izin operasional untuk berbagai jenis kegiatan usaha</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-hand-holding-usd text-teal-600 text-lg"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Penanaman Modal</h3>
                    <p class="text-gray-600">Layanan perizinan untuk investor dalam dan luar negeri</p>
                </div>
            </div>

            <!-- Lihat Semua Layanan Button -->
            <div class="text-center">
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">
                    Lihat Semua Layanan
                </button>
            </div>
        </div>
    </div>
    <div class="w-full min-h-screen bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Portal Aplikasi Pelayanan</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Akses mudah ke berbagai sistem perizinan
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Aplikasi Perizinan Berusaha -->
                <div
                    class="bg-white border border-gray-200 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-building text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Aplikasi Perizinan Berusaha</h3>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition duration-300 w-full">
                        Akses OSS
                    </button>
                </div>

                <!-- Perizinan Non Berusaha -->
                <div
                    class="bg-white border border-gray-200 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-file-alt text-green-600 text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Perizinan Non Berusaha</h3>
                    <button
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition duration-300 w-full">
                        Lihat Layanan
                    </button>
                </div>

                <!-- Lacak Perizinan -->
                <div
                    class="bg-white border border-gray-200 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-search-location text-purple-600 text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Lacak Perizinan</h3>
                    <button
                        class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-semibold transition duration-300 w-full">
                        Cek Status
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full min-h-auto bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Izin Terbit -->
                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-20 h-20 border border-gray-200 rounded-full flex items-center justify-center">
                            <i class="fas fa-file-document text-3xl text-green-400"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-blue-900">10,000+</h3>
                    <p class="text-xl text-blue-900">Izin Terbit</p>
                </div>

                <!-- Pengguna Aktif -->
                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-20 h-20 border border-gray-200 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-3xl text-yellow-400"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-blue-900">5,000+</h3>
                    <p class="text-xl text-blue-900">Pengguna Aktif</p>
                </div>

                <!-- Jenis Layanan -->
                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-20 h-20 border border-gray-200 rounded-full flex items-center justify-center">
                            <i class="fas fa-clipboard-list text-3xl text-red-400"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-blue-900">50+</h3>
                    <p class="text-xl text-blue-900">Jenis Layanan</p>
                </div>

                <!-- Layanan Online -->
                <div class="text-center text-white">
                    <div class="flex justify-center mb-4 ">
                        <div class="w-20 h-20 border border-gray-200 rounded-full flex items-center justify-center">
                            <i class="fas fa-globe text-3xl text-purple-400"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-blue-900">24/7</h3>
                    <p class="text-xl text-blue-900">Layanan Online</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full min-h-auto bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="bg-blue-900 rounded-2xl px-10 py-16 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Siap Memulai Perizinan Anda?
                </h2>
                <p class="text-xl text-blue-200 mb-8 max-w-2xl mx-auto">
                    Daftar sekarang dan nikmati kemudahan layanan perizinan online
                </p>
                <button
                    class="bg-green-500 hover:bg-green-300 text-gray-900 font-bold px-8 py-4 rounded-lg text-lg transition duration-300">
                    Mulai Sekarang
                </button>
            </div>
        </div>
    </div>
@endsection
