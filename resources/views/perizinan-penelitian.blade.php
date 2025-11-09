@extends('layout.main')
@section('kontent')
    {{-- <div class="w-full min-h-auto bg-blue-900 flex flex-col justify-left text-white p-10 mt-16">
        <div class="max-w-4xl py-6">
            <h1 class="text-5xl font-bold mb-4 text-left">Perizinan Penelitian Mahasiswa</h1>
            <p class="text-lg text-left">Ajukan permohonan izin penelitian untuk keperluan skripsi, tesis, atau penelitian
                akademis
            </p>
        </div>
    </div> --}}
    <div class="w-full min-h-auto bg-blue-900 flex flex-col justify-left text-white p-10 mt-16">
        <div class="max-w-4xl py-6 flex items-center space-x-4">
            <!-- Logo -->
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-file-alt text-blue-900 text-xl"></i>
            </div>
            <div>
                <h1 class="text-5xl font-bold mb-2">Perizinan Penelitian Mahasiswa</h1>
                <p class="text-lg">Ajukan permohonan izin penelitian untuk keperluan skripsi, tesis, atau penelitian
                    akademis</p>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="w-full min-h-screen bg-gray-50 py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Form Header -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 mb-8 ">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Formulir Permohonan Izin Penelitian</h2>
                <p class="text-gray-600">Lengkapi formulir di bawah ini dengan data yang valid</p>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data"
                class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                <!-- Data Pribadi Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Data Pribadi</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>

                        <!-- NIM / NPM -->
                        <div>
                            <label for="nim" class="block text-sm font-medium text-gray-700 mb-2">NIM / NPM *</label>
                            <input type="text" id="nim" name="nim" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>

                        <!-- Perguruan Tinggi -->
                        <div class="md:col-span-2">
                            <label for="universitas" class="block text-sm font-medium text-gray-700 mb-2">Perguruan Tinggi
                                *</label>
                            <input type="text" id="universitas" name="universitas"
                                placeholder="Contoh: Universitas Indonesia" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>

                        <!-- Fakultas -->
                        <div>
                            <label for="fakultas" class="block text-sm font-medium text-gray-700 mb-2">Fakultas *</label>
                            <input type="text" id="fakultas" name="fakultas" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>

                        <!-- Program Studi -->
                        <div>
                            <label for="prodi" class="block text-sm font-medium text-gray-700 mb-2">Program Studi *</label>
                            <input type="text" id="prodi" name="prodi" required
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
                            <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">No. Telepon *</label>
                            <input type="tel" id="telepon" name="telepon" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>
                    </div>
                </div>

                <!-- Informasi Penelitian Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Penelitian</h3>

                    <div class="grid grid-cols-1 gap-6">
                        <!-- Judul Penelitian -->
                        <div>
                            <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Penelitian
                                *</label>
                            <input type="text" id="judul" name="judul" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                        </div>

                        <!-- Tujuan Penelitian -->
                        <div>
                            <label for="tujuan" class="block text-sm font-medium text-gray-700 mb-2">Tujuan Penelitian
                                *</label>
                            <textarea id="tujuan" name="tujuan" rows="4" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"></textarea>
                        </div>

                        <!-- Lokasi Penelitian -->
                        <div>
                            <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-2">Lokasi Penelitian
                                *</label>
                            <select id="lokasi" name="lokasi" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                <option value="">Pilih lokasi penelitian</option>
                                <option value="kantor_pemerintah">Kantor Pemerintah</option>
                                <option value="sekolah">Sekolah</option>
                                <option value="rumah_sakit">Rumah Sakit</option>
                                <option value="puskesmas">Puskesmas</option>
                                <option value="desa_kelurahan">Desa/Kelurahan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <!-- Tanggal Mulai & Selesai -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="tanggal_mulai" class="block text-sm font-medium text-gray-700 mb-2">Tanggal
                                    Mulai *</label>
                                <input type="date" id="tanggal_mulai" name="tanggal_mulai" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                <p class="text-xs text-gray-500 mt-1">Format: hh/bb/tttt</p>
                            </div>

                            <div>
                                <label for="tanggal_selesai" class="block text-sm font-medium text-gray-700 mb-2">Tanggal
                                    Selesai *</label>
                                <input type="date" id="tanggal_selesai" name="tanggal_selesai" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                <p class="text-xs text-gray-500 mt-1">Format: hh/bb/tttt</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dokumen Pendukung Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Dokumen Pendukung</h3>
                    <div>
                        <label for="surat_pengantar" class="block text-sm font-medium text-gray-700 mb-2"></label>
                        Surat Pengantar dari Kampus
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click
                                            to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF (MAX 3mb)
                                    </p>
                                </div>
                                <input type="file" id="surat_pengantar" name="surat_pengantar" accept=".pdf" required />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="proposal" class="block text-sm font-medium text-gray-700 mb-2">
                            Proposal Penelitian</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click
                                            to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF (MAX 3mb)
                                    </p>
                                </div>
                                <input type="file" id="proposal" name="proposal" accept=".pdf" required />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="ktm" class="block text-sm font-medium text-gray-700 mb-2">
                                Kartu Mahasiswa (KTM)
                            </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click
                                            to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX 2MB)
                                    </p>
                                </div>
                                <input type="file" id="ktm" name="ktm" accept=".jpg,.jpeg,.png" required />
                            </label>
                        </div>
                    </div>
                    {{-- <div class="space-y-6">
                        <!-- Surat Pengantar -->
                        <div>
                            <label for="surat_pengantar" class="block text-sm font-medium text-gray-700 mb-2">
                                Surat Pengantar dari Kampus
                            </label>
                            <input type="file" id="surat_pengantar" name="surat_pengantar" accept=".pdf" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            <p class="text-xs text-gray-500 mt-1">PDF, max 3MB</p>
                        </div>

                        <!-- Proposal Penelitian -->
                        <div>
                            <label for="proposal" class="block text-sm font-medium text-gray-700 mb-2">
                                Proposal Penelitian
                            </label>
                            <input type="file" id="proposal" name="proposal" accept=".pdf" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            <p class="text-xs text-gray-500 mt-1">PDF, max 3MB</p>
                        </div>

                        <!-- Kartu Mahasiswa -->
                        <div>
                            <label for="ktm" class="block text-sm font-medium text-gray-700 mb-2">
                                Kartu Mahasiswa (KTM)
                            </label>
                            <input type="file" id="ktm" name="ktm" accept=".jpg,.jpeg,.png" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            <p class="text-xs text-gray-500 mt-1">JPG/PNG, max 2MB</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Action Buttons -->
                <div class="flex flex-col gap-4 justify-center pt-6">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300">
                        Ajukan Permohonan
                    </button>
                    <button type="button"
                        class="w-full bg-gray-300 hover:bg-gray-400 text-gray-700 px-8 py-4 rounded-lg font-semibold transition duration-300">
                        Simpan Draft
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('researchForm').addEventListener('submit', function (e) {
            e.preventDefault();
            // Handle form submission here
            alert('Formulir berhasil diajukan!');
        });
    </script>

@endsection
