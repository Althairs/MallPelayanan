@extends('layout.main')
@section('kontent')
    <div class="w-full min-h-screen bg-white py-12">
        <div class="w-full min-h-auto bg-blue-900 flex flex-col justify-left text-white px-10 mt-9">
            <div class="max-w-6xl py-8">
                <h1 class="text-5xl font-bold mb-4 text-left">Tentang DPMPTSP Bone Bolango</h1>
                <p class="text-lg text-left">Melayani dengan sepenuh hati untuk kemudahan berusaha
                </p>
            </div>
        </div>
        <div class="container mx-auto px-4 max-w-6xl">
            <!-- Header Section -->
            <div class="text-left my-20">
                <p class="text-gray-700 max-w-4xl mx-auto">
                    Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kabupaten Bone Bolango adalah lembaga
                    pemerintah daerah yang bertugas menyelenggarakan pelayanan administrasi perizinan dan non-perizinan
                    secara terpadu dengan prinsip koordinasi, integrasi, sinkronisasi, simplifikasi, keamanan, dan kepastian
                    untuk kemajuan Kabupaten Bone Bolango.
                </p>
            </div>

            <!-- Misi, Visi, Komitmen Section -->
            <div class="flex flex-col lg:flex-row justify-center items-stretch gap-8 mb-12">
                <!-- Misi -->
                <div class="bg-blue-50 rounded-xl p-8 text-center flex-1">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-bullseye text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Misi</h3>
                    <p class="text-gray-700">
                        Memberikan pelayanan perizinan yang berkualitas, efisien, dan berorientasi pada kepuasan masyarakat
                    </p>
                </div>

                <!-- Visi -->
                <div class="bg-green-50 rounded-xl p-8 text-center flex-1">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-eye text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Visi</h3>
                    <p class="text-gray-700">
                        Menjadi pusat pelayanan perizinan dan investasi yang terpercaya dan modern
                    </p>
                </div>

                <!-- Komitmen -->
                <div class="bg-purple-50 rounded-xl p-8 text-center flex-1">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Komitmen</h3>
                    <p class="text-gray-700">
                        Melayani dengan integritas, transparansi, dan akuntabilitas tinggi
                    </p>
                </div>
            </div>

            <!-- Tugas dan Fungsi Section -->
            <div class="bg-gray-50 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tugas dan Fungsi</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                        <span class="text-gray-700">Penyelenggaraan pelayanan administrasi di bidang perizinan dan
                            non-perizinan</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                        <span class="text-gray-700">Koordinasi dan pelaksanaan kebijakan penanaman modal</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                        <span class="text-gray-700">Pengembangan iklim penanaman modal dan promosi</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                        <span class="text-gray-700">Pelayanan dan pengendalian pelaksanaan penanaman modal</span>
                    </div>
                    <div class="flex items-start md:col-span-2">
                        <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                        <span class="text-gray-700">Pengelolaan data dan sistem informasi penanaman modal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
