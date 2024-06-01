<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pemasukan Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-admin>
        <x-navbar-admin title="Pengelolaan Keuangan - Pemasukan (Lihat)" />
        <div class="">
            <a href="/PemasukanAdmin">
                <button type="button" class="pl-2 px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Kembali
                </button>
            </a>
        </div>
    </x-layout-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
