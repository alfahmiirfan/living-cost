<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pendataan Siswa - Ubah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>

<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Pendataan Siswa    " />
        <form action="" method="POST">
            @csrf
            <div class="">
                <div class="">
                    <a href="/PendataanSiswaSuperAdmin">
                        <button type="button" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 pl-2 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
            <div class="pt-6">
                <h1 class="text-lg font-light">Nama Siswa</h1>
                <div class="w-full">
                    <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                        </div>
                        <input name="nama" type="search" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan nama siswa" value="{{ $siswa->nama }}" required />
                    </div>
                </div>
            </div>
            <div class="flex pt-6">
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">NISN</h1>
                    <div class="pb-6">
                        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            </div>
                            <input name="nisn" type="number" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan NISN" required value="{{ $siswa->nisn }}" />
                        </div>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Password</h1>
                    <div class="pb-6">
                        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            </div>
                            <input name="kata_sandi" type="search" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="******" />
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
                            {{-- <input name="tahun_masuk" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Angkatan" required value="{{ $siswa->tahun_masuk }}" /> --}}
                            <select name="tahun_masuk" id="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required disabled>
                                @foreach ($daftarTahun as $key => $tahun)
                                <option value="{{ $tahun->id }}" @selected($tahun->tahun === $siswa->tahun_masuk)>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
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
                            {{-- <input name="angkatan" type="search" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Pilih Angkatan" required value="{{ $siswa->angkatan }}" /> --}}
                            <select name="angkatan" id="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required disabled>
                                @foreach ($daftarTahun as $key => $tahun)
                                <option value="{{ $tahun->id }}" @selected($tahun->tahun === $siswa->angkatan)>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-10 right-10 flex items-center justify-between rounded-md">
                <a href="#">
                    <button type="submit" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1.5 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <span class="group-hover:text-gray-700">Ubah</span>
                    </button>
                </a>
            </div>
        </form>
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
