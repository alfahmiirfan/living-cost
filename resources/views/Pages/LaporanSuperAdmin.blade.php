{{-- <x-navbar-super-admin>Pengelolaan Keuangan - Pengeluaran</x-navbar-super-admin> --}}
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Keuangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Laporan Keuangan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md">
                <div class="pr-8">
                    <a href="#">
                        <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <div class="pr-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.25 17.5V7.5C26.25 6.83696 25.9866 6.20107 25.5178 5.73223C25.0489 5.26339 24.413 5 23.75 5H6.25C5.58696 5 4.95107 5.26339 4.48223 5.73223C4.01339 6.20107 3.75 6.83696 3.75 7.5V25C3.75 25.663 4.01339 26.2989 4.48223 26.7678C4.95107 27.2366 5.58696 27.5 6.25 27.5H16.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.75 12.5H26.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 25L22.5 27.5L27.5 22.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Februari
                        </button>
                    </a>
                </div>
                <div class="">
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
        </div>
        <div class="tab">
            <div class="">
                <table class="table-fixed text-left w-full">
                    <thead class="bg-yale-blue flex text-white w-full">
                        <tr class="flex w-full max-h-10 items-center">
                            <th class="p-4 w-40">No</th>
                            <th class="p-4 w-96">Nama</th>
                            <th class="p-4 w-1/4">NISN</th>
                            <th class="p-4 w-1/4">Angkatan</th>
                            <th class="p-4 w-1/4">Aksi</th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 30vh;">
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">1</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2020</td>
                            <td class="p-4 w-1/4">15/05/2024
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">2</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2021</td>
                            <td class="p-4 w-1/4">15/05/2024
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">3</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2022</td>
                            <td class="p-4 w-1/4">15/05/2024
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">4</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2023</td>
                            <td class="p-4 w-1/4">15/05/2024
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">5</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2024</td>
                            <td class="p-4 w-1/4">15/05/2024
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
