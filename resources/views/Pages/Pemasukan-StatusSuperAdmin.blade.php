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
            <div class="pl-[890px]">
                <a href="Pemasukan">
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
        <div class="tab">
            <div class="">
                <table class="table-fixed text-left w-full">
                    <thead class="bg-yale-blue flex text-white w-full">
                        <tr class="flex w-full max-h-10 items-center">
                            <th class="p-4 w-40">No</th>
                            <th class="p-4 w-96">Nama</th>
                            <th class="p-4 w-1/4">NISN</th>
                            <th class="p-4 w-1/4">Bulan</th>
                            <th class="p-4 w-1/4">Tanggal Upload</th>
                            <th class="p-4 w-1/4">Status</th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 30vh;">
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">1</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">November</td>
                            <td class="p-4 w-1/4">10/05/2024</td>
                            <td class="p-4 w-1/4">
                                <span class="inline-flex items-center rounded-md bg-[#32D62F] px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Lunas</span>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">2</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">November</td>
                            <td class="p-4 w-1/4">10/05/2024</td>
                            <td class="p-4 w-1/4">
                                <span class="inline-flex items-center rounded-md bg-[#32D62F] px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Lunas</span>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">3</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">November</td>
                            <td class="p-4 w-1/4">10/05/2024</td>
                            <td class="p-4 w-1/4">
                                <span class="inline-flex items-center rounded-md bg-[#FFF000] px-3.5 py-2 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Belum Bayar</span>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">4</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">November</td>
                            <td class="p-4 w-1/4">10/05/2024</td>
                            <td class="p-4 w-1/4">
                                <span class="inline-flex items-center rounded-md bg-[#FFF000] px-3.5 py-2 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Belum Bayar</span>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">5</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">November</td>
                            <td class="p-4 w-1/4">10/05/2024</td>
                            <td class="p-4 w-1/4">
                                <span class="inline-flex items-center rounded-md bg-[#F72323] px-[18px]   py-2 text-xs font-medium text-black ring-1 ring-inset ring-red-600/10">Telat Bayar</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
