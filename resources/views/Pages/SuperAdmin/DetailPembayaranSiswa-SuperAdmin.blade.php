<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Detail Pemasukan Siswa - Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>

<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Detail Pemasukan Siswa" />
        <div class="pb-4">
            <table class="">
                <tr>
                    <td>Nama Siswa</td>
                    <td class="pl-2 font-semibold">: {{ $siswa->nama }}</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td class="pl-2 font-semibold">: {{ $siswa->nisn }}</td>
                </tr>
                {{-- <tr>
                    <td>Tahun Masuk</td>
                    <td class="font-semibold pl-2">: 2020</td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td class="font-semibold pl-2">: 2020</td>
                </tr> --}}
            </table>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-left text-sm rtl:text-right">
                <thead class="bg-yale-blue text-sm uppercase text-white dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
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
                            Tagihan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($incomes as $key => $income) --}}
                    @foreach ($siswa->income as $item)
                        <tr class="border-b bg-white text-sm dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row" class="whitespace-nowrap px-6 py-2 font-medium text-gray-900 dark:text-white">
                                {{-- {{ ( is_numeric(request()->query('page')) && request()->query('page') !== null ? (request()->query('page') - 1) * 5 : 0 ) + $loop->iteration }} --}}
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $item->year }}
                                {{-- {{ $income->year }} --}}
                            </td>
                            <td class="px-6 py-2">
                                {{ $item->month }}
                                {{-- {{ $income->month }} --}}
                            </td>
                            <td class="px-6 py-2">
                                {{ $item->upload_date }}
                                {{-- {{ $income->upload_date }} --}}
                            </td>
                            <td class="px-6 py-2">
                                Rp. {{ number_format($item->amount, 0, ',', '.') }}
                                {{-- {{ $income->upload_date }} --}}
                            </td>
                            <td class="px-6 py-2">
                                <span class="{{ strtolower($item->status) === 'belum bayar' ? 'bg-[#F5E81D]' : (strtolower($item->status) === 'sudah bayar' ? 'bg-[#32D62F]' : 'bg-red-600') }} inline-flex items-center rounded-md px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">
                                    {{ $item->status }}
                                </span>
                                {{-- <span class="   {{ strtolower($income->status) === 'belum bayar' ? 'bg-[#F5E81D]' : (strtolower($income->status) === 'sudah bayar' ? 'bg-[#32D62F]' : 'bg-red-600') }} inline-flex items-center rounded-md px-8 py-2 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">{{ $income->status }}</span> --}}
                            </td>
                        </tr>
                    @endforeach
                    {{-- @endforeach --}}
                </tbody>
            </table>
            {{-- {{ $incomes->appends(request()->query())->links() }} --}}
        </div>
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
