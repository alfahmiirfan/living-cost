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
        <x-navbar-super-admin title="Pengelolaan Keuangan - Pemasukan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md">
                <a href="PemasukanSuperAdmin">
                    <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Kembali
                    </button>
                </a>
            </div>
        </div>
        <!-- component -->
        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-sm text-white uppercase bg-yale-blue dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Upload
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <span class="inline-flex items-center rounded-md bg-[#32D62F] px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Lunas</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <span class="inline-flex items-center rounded-md bg-[#32D62F] px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Lunas</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <span class="inline-flex items-center rounded-md bg-[#FFF000] px-3.5 py-2 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Belum Bayar</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <span class="inline-flex items-center rounded-md bg-[#FFF000] px-3.5 py-2 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Belum Bayar</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <span class="inline-flex items-center rounded-md bg-[#F72323] px-[18px]   py-2 text-xs font-medium text-black ring-1 ring-inset ring-red-600/10">Telat Bayar</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
