<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pemasukan Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Laporan Keuangan" />
        <div class="">
            <div class="absolute top-30">
                <a href="/LaporanSuperAdmin">
                    <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Kembali
                    </button>
                </a>
            </div>
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md">
                <a href="/Laporan-LihatSuperAdmin">
                    <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <div class="pr-2">
                            <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.42554 9.75V1H22.7021V9.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.42553 21H3.71277C2.9933 21 2.30329 20.7366 1.79455 20.2678C1.28581 19.7989 1 19.163 1 18.5V12.25C1 11.587 1.28581 10.9511 1.79455 10.4822C2.30329 10.0134 2.9933 9.75 3.71277 9.75H25.4149C26.1344 9.75 26.8244 10.0134 27.3331 10.4822C27.8419 10.9511 28.1277 11.587 28.1277 12.25V18.5C28.1277 19.163 27.8419 19.7989 27.3331 20.2678C26.8244 20.7366 26.1344 21 25.4149 21H22.7021" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22.7021 16H6.42554V26H22.7021V16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        Lihat & Cetak PDF
                    </button>
                </a>
            </div>
        </div>
        <div class="pt-14">
            <div class="flex">
                <h1 class="text-base font-semibold pr-3">Bulan : </h1>
                <h1 class="text-base font-normal">Mei </h1>
            </div>
            <div class="flex">
                <h2 class="text-base font-semibold pr-3">Tanggal Cetak : </h2>
                <h2 class="text-base font-normal">15/05/2024 </h2>
            </div>
        </div>
    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>