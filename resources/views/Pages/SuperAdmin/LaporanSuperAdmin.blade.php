{{-- <x-navbar-super-admin>Pengelolaan Keuangan - Pengeluaran</x-navbar-super-admin> --}}
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan Keuangan - Semua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
    <style>
        @media print {
            body {
                visibility: hidden;
            }

            #laporan {
                display: block;
                visibility: visible;
                position: absolute;
                left: 0;
                top: 0;
            }
        }

    </style>
</head>

<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Laporan Keuangan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="flex">
                <div class="top-30 absolute right-10 flex items-center justify-between rounded-md">
                    <a href="/LaporanKategoriSuperAdmin">
                        <button id="dropdownReport" data-dropdown-toggle="dropdown-report" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-2.5 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                            {{-- <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                                    <path d="M8 7h6" />
                                    <path d="M8 11h8" /></svg>
                            </div> --}}
                            Laporan Per Kategori
                        </button>
                    </a>
                    <div class="pl-8">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                            <div class="pr-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.25 17.5V7.5C26.25 6.83696 25.9866 6.20107 25.5178 5.73223C25.0489 5.26339 24.413 5 23.75 5H6.25C5.58696 5 4.95107 5.26339 4.48223 5.73223C4.01339 6.20107 3.75 6.83696 3.75 7.5V25C3.75 25.663 4.01339 26.2989 4.48223 26.7678C4.95107 27.2366 5.58696 27.5 6.25 27.5H16.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.75 12.5H26.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 25L22.5 27.5L27.5 22.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Bulan
                            <svg class="ms-3 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                @foreach ($daftarBulan as $item)
                                <li>
                                    <form action="">
                                        <input type="hidden" name="tahun" value="{{ request()->query('tahun') }}">
                                        <input type="hidden" name="bulan" value="{{ $item }}">
                                        <button type="button" onclick="this.form.submit()" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $namaBulan[(int) $item - 1] ?? '' }}</button>
                                    </form>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Februari</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Maret</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">April</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mei</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Juni</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Juli</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Agustus</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">September</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Oktober</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">November</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desember</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="pl-8">
                        <button id="dropdownYears" data-dropdown-toggle="dropdown-years" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                            <div class="pr-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 2.5V7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.25 17.5V7.5C26.25 6.83696 25.9866 6.20107 25.5178 5.73223C25.0489 5.26339 24.413 5 23.75 5H6.25C5.58696 5 4.95107 5.26339 4.48223 5.73223C4.01339 6.20107 3.75 6.83696 3.75 7.5V25C3.75 25.663 4.01339 26.2989 4.48223 26.7678C4.95107 27.2366 5.58696 27.5 6.25 27.5H16.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.75 12.5H26.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20 25L22.5 27.5L27.5 22.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Tahun
                            <svg class="ms-3 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-years" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownYears">
                                @foreach ($daftarTahun as $item)
                                <li>
                                    <form action="">
                                        <input type="hidden" name="bulan" value="{{ $item }}">
                                        <button type="button" onclick="this.form.submit()" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item }}</button>
                                    </form>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2023</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2025</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="pl-8">
                        <button onclick="LaporanPrint()" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <div class="pr-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.42554 9.75V1H22.7021V9.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.42553 21H3.71277C2.9933 21 2.30329 20.7366 1.79455 20.2678C1.28581 19.7989 1 19.163 1 18.5V12.25C1 11.587 1.28581 10.9511 1.79455 10.4822C2.30329 10.0134 2.9933 9.75 3.71277 9.75H25.4149C26.1344 9.75 26.8244 10.0134 27.3331 10.4822C27.8419 10.9511 28.1277 11.587 28.1277 12.25V18.5C28.1277 19.163 27.8419 19.7989 27.3331 20.2678C26.8244 20.7366 26.1344 21 25.4149 21H22.7021" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.7021 16H6.42554V26H22.7021V16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Cetak PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-start gap-2.5">
            <p>Bulan : {{ $namaBulan[(int) $bulan - 1] ?? '' }}</p>
            <p>Tahun : {{ $tahun }}</p>
        </div>
        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-left text-sm rtl:text-right">
                <thead class="bg-yale-blue text-sm uppercase text-white dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengeluaran as $item)
                    <tr class="border-b bg-white text-sm dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row" class="whitespace-nowrap px-6 py-2 font-medium text-gray-900 dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-2">
                            {{ $item->nama_item }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $item->kategori }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $item->jumlah }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $item->harga }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $item->tanggal }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="hidden p-16" id="laporan">
            <div class="">
                <h1 class="pb-4 text-xl font-bold">Laporan Keuangan SMAN 10 Kaur (Pentagon) </h1>
                <h1 class="">Bulan : {{ $namaBulan[(int) $bulan - 1] ?? '' }}</h1>
                <h1 class="pb-4">Jenis : Semua Laporan</h1>
                <h1 class="pb-4 font-bold">Total Pengeluaran : {{ $pengeluaran->sum('harga') }}</h1>
                <div class="relative overflow-x-auto">
                    <table class="w-full border-2 text-left text-sm rtl:text-right">
                        <thead class="border-2 text-xs uppercase">
                            <tr>
                                <th scope="col" class="px-3 py-1">
                                    No
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Nama Item
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Kategori
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Jumlah
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Harga
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Tanggal
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengeluaran as $item)
                            <tr class="border-2">
                                <td class="px-3 py-1">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-3 py-1">
                                    {{ $item->nama_item }}
                                </td>
                                <td class="px-3 py-1">
                                    {{ $item->kategori }}
                                </td>
                                <td class="px-3 py-1">
                                    {{ $item->jumlah }}
                                </td>
                                <td class="px-3 py-1">
                                    {{ $item->harga }}
                                </td>
                                <td class="px-3 py-1">
                                    {{ $item->tanggal }}
                                </td>
                            </tr>
                            @endforeach
                            {{-- <tr class="border-2">
                                <td class="px-3 py-1">
                                    2
                                </td>
                                <td class="px-3 py-1">
                                    Bantal
                                </td>
                                <td class="px-3 py-1">
                                    Sarpras
                                </td>
                                <td class="px-3 py-1">
                                    8
                                </td>
                                <td class="px-3 py-1">
                                    400000
                                </td>
                                <td class="px-3 py-1">
                                    24/06/2024
                                </td>
                            </tr>
                            <tr class="border-2">
                                <td class="px-3 py-1">
                                    3
                                </td>
                                <td class="px-3 py-1">
                                    Gorengan
                                </td>
                                <td class="px-3 py-1">
                                    Snack
                                </td>
                                <td class="px-3 py-1">
                                    20
                                </td>
                                <td class="px-3 py-1">
                                    200000
                                </td>
                                <td class="px-3 py-1">
                                    25/06/2024
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        function LaporanPrint() {
            window.print()
        }

    </script>
</body>

</html>
