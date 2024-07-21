<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pendataan Siswa - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>
<body>
    <x-layout-admin>
        <x-navbar-admin title="Pendataan Siswa (Tambah)" />
        <form action="" method="POST">
            @csrf
            <div class="">
                <a href="/PendataanSiswaAdmin">
                    <button type="button" class="pl-2 px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Kembali
                    </button>
                </a>
            </div>
            <div class="pt-6">
                <h1 class="text-lg font-light">Nama Siswa</h1>
                <div class="w-full ">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        </div>
                        <input name="nama" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama siswa" required value="{{old('nama')}}" />
                        @error('nama')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex pt-6 ">
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">NISN</h1>
                    <div class="pb-6  ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input name="nisn" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan NISN" required value="{{old('nisn')}}" />
                            @error('nisn')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Password</h1>
                    <div class="pb-6  ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input name="kata_sandi" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="******" required value="{{old('kata_sandi')}}" />
                            @error('kata_sandi')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Tahun Masuk</h1>
                    <div class="pb-6">
                        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            </div>
                            {{-- <input name="tahun_masuk" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Angkatan" required value="{{old('tahun_masuk')}}" /> --}}
                            <select name="tahun_masuk" id="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required>
                                @foreach ($daftarTahun as $key => $tahun)
                                <option value="{{ $tahun->id }}" @selected($tahun->tahun === \Carbon\Carbon::now()->format('Y'))>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            @error('tahun_masuk')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Angkatan</h1>
                    <div class="pb-6">
                        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            </div>
                            {{-- <input name="angkatan" type="search" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Pilih Angkatan" required value="{{ old('angkatan') }}" /> --}}
                            <select name="angkatan" id="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required>
                                @foreach ($daftarTahun as $key => $tahun)
                                <option value="{{ $tahun->id }}" @selected($tahun->tahun === \Carbon\Carbon::now()->format('Y'))>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            @error('angkatan')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            <div class="absolute bottom-10 right-10 flex justify-between items-center rounded-md">
                <a href="#">
                    <button type="submit" class="px-5 py-1.5 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <span class="group-hover:text-gray-700">Simpan</span>
                    </button>
                </a>
            </div>
        </form>
    </x-layout-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
