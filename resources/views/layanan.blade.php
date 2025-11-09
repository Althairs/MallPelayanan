@extends('layout.main')
@section('kontent')
    <div class="w-full min-h-auto bg-blue-900 flex flex-col justify-left text-white p-10 mt-16">
        <div class="max-w-2xl py-6">
            <h1 class="text-5xl font-bold mb-4 text-left">Layanan Perizinan</h1>
            <p class="text-lg text-left">Berbagai jenis layanan perizinan dan investasi yang mudah, cepat, dan terpercaya
            </p>
        </div>
    </div>

    <!-- Filter Buttons -->
    <div class="w-full bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="bg-gray-200 flex justify-center py-1 px-2 rounded-lg">
                    <button
                        class="filter-btn active bg-white border border-gray-300 text-gray-800 px-10 py-1 rounded-lg font-semibold transition duration-300"
                        data-filter="all">
                        Semua
                    </button>
                    <button
                        class="filter-btn bg-transparan border border-gray-200 text-gray-600 px-10 py-1 rounded-lg font-semibold transition duration-300"
                        data-filter="kesehatan">
                        Kesehatan
                    </button>
                    <button
                        class="filter-btn bg-gray-200 border border-gray-200 text-gray-600 px-10 py-1 rounded-lg font-semibold transition duration-300"
                        data-filter="usaha">
                        Usaha
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Layanan Cards -->
    <div class="w-full min-h-screen bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Layanan Kesehatan -->
            <div class="service-category" data-category="kesehatan">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Layanan Kesehatan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- SIP -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-md text-blue-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Dokter (SIP)</h3>
                        <p class="text-gray-600">Surat Izin Praktik untuk dokter umum dan dokter spesialis di fasilitas
                            kesehatan</p>
                    </div>

                    <!-- SIPNAKES -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-nurse text-green-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Perawat (SIPNAKES)</h3>
                        <p class="text-gray-600">Surat Izin Praktik untuk tenaga keperawatan di rumah sakit dan klinik</p>
                    </div>

                    <!-- Izin Praktik Bidan -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-baby text-pink-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Bidan</h3>
                        <p class="text-gray-600">Surat Izin Praktik untuk bidan praktik mandiri dan di fasilitas kesehatan
                        </p>
                    </div>

                    <!-- SIPA -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-prescription-bottle text-purple-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Apoteker (SIPA)</h3>
                        <p class="text-gray-600">Surat Izin Praktik Apoteker untuk apotek dan rumah sakit</p>
                    </div>

                    <!-- Tenaga Teknis Kefarmasian -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-mortar-pestle text-indigo-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Praktik Tenaga Teknis Kefarmasian</h3>
                        <p class="text-gray-600">Izin untuk asisten apoteker dan tenaga teknis kefarmasian lainnya</p>
                    </div>

                    <!-- Izin Operasional Klinik -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-clinic-medical text-red-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Operasional Klinik</h3>
                        <p class="text-gray-600">Izin pendirian dan operasional klinik pratama dan utama</p>
                    </div>
                </div>
            </div>

            <!-- Layanan Usaha & Perizinan Lainnya -->
            <div class="service-category" data-category="usaha">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Layanan Usaha & Perizinan Lainnya</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Perizinan Penelitian -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-flask text-blue-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Perizinan Penelitian</h3>
                        <p class="text-gray-600">Izin penelitian mahasiswa dan akademisi untuk keperluan riset dan
                            penelitian di berbagai instansi</p>
                    </div>

                    <!-- Izin Usaha Mikro dan Kecil -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-store text-green-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Usaha Mikro dan Kecil</h3>
                        <p class="text-gray-600">Perizinan untuk usaha mikro dan kecil termasuk NIB dan izin usaha lainnya
                        </p>
                    </div>

                    <!-- IMB -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-hard-hat text-orange-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Mendirikan Bangunan (IMB)</h3>
                        <p class="text-gray-600">Pengurusan IMB untuk pembangunan baru, renovasi, dan perubahan fungsi
                            bangunan</p>
                    </div>

                    <!-- Izin Operasional -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-cogs text-purple-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Operasional</h3>
                        <p class="text-gray-600">Izin operasional untuk restoran, hotel, tempat hiburan, dan usaha lainnya
                        </p>
                    </div>

                    <!-- Izin Penanaman Modal -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-hand-holding-usd text-teal-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Penanaman Modal</h3>
                        <p class="text-gray-600">Layanan perizinan untuk investor dalam negeri (PMDN) dan investor asing
                            (PMA)</p>
                    </div>

                    <!-- Izin Tenaga Kerja Asing -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-passport text-red-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Tenaga Kerja Asing</h3>
                        <p class="text-gray-600">Pengurusan izin mempekerjakan tenaga kerja asing (IMTA) dan RPTKA</p>
                    </div>

                    <!-- Izin Reklame -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-ad text-yellow-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Reklame</h3>
                        <p class="text-gray-600">Perizinan untuk pemasangan berbagai jenis reklame dan papan iklan</p>
                    </div>

                    <!-- Izin Gangguan (HO) -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 service-card">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-gray-600 text-2xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Izin Gangguan (HO)</h3>
                        <p class="text-gray-600">Izin gangguan atau HO untuk usaha yang berpotensi menimbulkan gangguan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const serviceCategories = document.querySelectorAll('.service-category');

            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-white', 'border-gray-300', 'text-gray-800');
                        btn.classList.add('bg-gray-200', 'border-gray-200', 'text-gray-600');
                    });

                    // Add active class to clicked button
                    this.classList.remove('bg-gray-200', 'border-gray-200', 'text-gray-600');
                    this.classList.add('active', 'bg-white', 'border-gray-300', 'text-gray-800');

                    const filter = this.getAttribute('data-filter');

                    // Show/hide categories based on filter
                    serviceCategories.forEach(category => {
                        if (filter === 'all') {
                            category.style.display = 'block';
                        } else {
                            if (category.getAttribute('data-category') === filter) {
                                category.style.display = 'block';
                            } else {
                                category.style.display = 'none';
                            }
                        }
                    });
                });
            });
        });
    </script>
@endsection
