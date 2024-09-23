<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pemasukan Super Admin</title>
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
        <x-navbar-super-admin title="Pengelolaan Keuangan - Pemasukan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="top-30 absolute right-10 flex items-center justify-between rounded-md">
                <div class="flex pr-8">
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                        Update Biaya Living Cost
                    </button>
                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                        <div class="relative max-h-full w-full max-w-md p-4">
                            <!-- Modal content -->
                            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Update Biaya Living Cost
                                    </h3>
                                    <button type="button" class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="" method="POST" class="p-4 md:p-5">
                                    @csrf
                                    <div class="mb-4 grid grid-cols-2 gap-4">
                                        <div class="col-span-2">
                                            <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Biaya</label>
                                            <input type="number" name="price" id="price" class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="{{ number_format($harga->amoung, 0, '', '.') }}" required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Update Biaya
                                    </button>
                                </form>
                            </div>
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
                        <form id="dropdown-years" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownYears">
                                @foreach ($years as $key => $year)
                                    <li>
                                        <button type="submit" name="year" value="{{ $year }}" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $year }}</button>
                                    </li>
                                @endforeach
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="">
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
                    <form id="dropdown" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                        <input type="hidden" name="year" value="{{ request()->query('year') }}">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $key => $month)
                                <li>
                                    <button type="submit" name="month" value="{{ $month }}" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $month }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </form>
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
                        Rekap Pembayaran
                    </button>
                </div>
            </div>
        </div>
        <!-- component -->
        {{-- Table --}}
        <div class="flex items-center justify-start gap-2.5">
            <p>Bulan : {{ $bulan }}</p>
            <p>Tahun : {{ $tahun }}</p>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-left text-sm rtl:text-right">
                <thead class="bg-yale-blue text-sm uppercase text-white dark:bg-gray-700 dark:text-gray-400">
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
                            Tahun
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Bayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incomes as $key => $income)
                        <tr class="border-b bg-white text-sm dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row" class="whitespace-nowrap px-6 py-2 font-medium text-gray-900 dark:text-white">
                                {{ (is_numeric(request()->query('page')) && request()->query('page') !== null ? (request()->query('page') - 1) * 5 : 0) + $loop->iteration }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $income->name }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $income->nisn }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $income->year }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $income->month }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $income->upload_date }}
                            </td>
                            <td class="px-6 py-2">
                                <span class="{{ strtolower($income->status) === 'belum bayar' ? 'bg-[#F5E81D]' : (strtolower($income->status) === 'sudah bayar' ? 'bg-[#32D62F]' : 'bg-red-600') }} inline-flex items-center rounded-md px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">{{ $income->status }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $incomes->appends(request()->query())->links() }}
        </div>
        <div class="hidden p-16" id="laporan">
            <div class="">
                <h1 class="pb-4 text-xl font-bold">Rekap Pembayaran Living Cost SMAN 10 Kaur (Pentagon) </h1>
                <h1 class="">Bulan : {{ $bulan }}</h1>
                <h1 class="">Tahun : {{ $tahun }}</h1>
                <h1 class="pb-4 font-bold">Total Pembayaran : Rp. {{ number_format($total, 0, ',', '.') }}</h1>
                <div class="relative overflow-x-auto">
                    <table class="w-full border-2 text-left text-sm rtl:text-right">
                        <thead class="border-2 text-xs uppercase">
                            <tr>
                                <th scope="col" class="px-3 py-1">
                                    No
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Nama
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    NISN
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Tanggal Bayar
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Jumlah Pembayaran
                                </th>
                                <th scope="col" class="px-3 py-1">
                                    Status
                                </th>
                                {{-- <th scope="col" class="px-3 py-1">
                                    Total Tunggakan
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $income)
                                <tr class="border-2">
                                    <td class="px-3 py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-3 py-1">
                                        {{ $income->name }}
                                    </td>
                                    <td class="px-3 py-1">
                                        {{ $income->nisn }}
                                    </td>
                                    <td class="px-3 py-1">
                                        {{ $income->upload_date }}
                                    </td>
                                    <td class="px-3 py-1">
                                        Rp. {{ number_format($income->amount, 0, ',', '.') }}
                                    </td>
                                    <td class="px-3 py-1">
                                        {{ $income->status }}
                                    </td>
                                    {{-- <td class="px-3 py-1">
                                    Rp. 4.140.000
                                </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 flex pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright">
                <circle cx="12" cy="12" r="10" />
                <path d="M14.83 14.83a4 4 0 1 1 0-5.66" />
            </svg>
            <h1 class="pl-2 pr-2 text-sm font-semibold">Created by Muhammad Alfahmi Irfan | 2024 </h1>
            {{-- <h1></h1>? --}}
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
