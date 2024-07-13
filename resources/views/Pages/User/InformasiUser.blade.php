<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <x-layout-user>
        <x-navbar-user title="{{ request()->cookie('username') }}" />
        <div class="pb-4 pt-4">
            <h1 class="text-base font-bold">Informasi Pembayaran Living Cost</h1>
        </div>
        <div class="pb-4 pr-8">
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
                    @foreach ($years as $key => $year)
                    <li>
                        <a href="/InformasiUser?year={{ $year }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $year }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-left text-sm rtl:text-right">
                <thead class="bg-yale-blue text-sm uppercase text-white dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-2">
                            No
                        </th>
                        <th scope="col" class="px-2 py-2">
                            Tahun
                        </th>
                        <th scope="col" class="px-2 py-2">
                            Bulan
                        </th>
                        <th scope="col" class="px-2 py-2">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                    <tr class="border-b bg-white text-sm dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row" class="whitespace-nowrap px-6 py-2 font-medium text-gray-900 dark:text-white">
                            {{ ((request()->query('page') ?? 1) - 1) * 6  + $loop->iteration }}
                        </th>
                        <td class="px-2 py-2">
                            {{ $item->year }}
                        </td>
                        <td class="px-2 py-2">
                            {{ $item->month }}
                        </td>
                        <td class="px-2 py-2">
                            <span class="{{ strtolower($item->status) === 'belum bayar' ? 'bg-[#F5E81D]' : (strtolower($item->status) === 'sudah bayar' ? 'bg-[#32D62F]' : 'bg-red-600') }} inline-flex items-center rounded-md px-6 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">{{ $item->status }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $data->appends(request()->query())->links() }}

        <x-tab-user />
    </x-layout-user>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
