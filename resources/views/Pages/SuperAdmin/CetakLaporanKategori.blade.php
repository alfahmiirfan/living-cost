<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Laporan Keuangan - Kategori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>
<body>
    <div class="p-16">
        <div class="">
            <h1 class="font-bold text-xl pb-4">Laporan Keuangan SMAN 10 Kaur (Pentagon) </h1>
            <h1 class="">Bulan : </h1>
            <h1 class="pb-4">Jenis : Laporan Per Kategori</h1>
            <h1 class="pb-4 font-bold">Total Pengeluaran : </h1>
            <div class="relative overflow-x-auto">
                <table class="border-2 w-full text-sm text-left rtl:text-right">
                    <thead class="border-2 text-xs  uppercase ">
                        <tr>
                            <th scope="col" class="px-3 py-1">
                                No
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
                        <tr class="border-2">
                            <td class="px-3 py-1">
                                1
                            </td>
                            <td class="px-3 py-1">
                                Pangan
                            </td>
                            <td class="px-3 py-1">
                                12
                            </td>
                            <td class="px-3 py-1">
                                350000
                            </td>
                            <td class="px-3 py-1">
                                23/06/2024
                            </td>
                        </tr>
                        <tr class="border-2">
                            <td class="px-3 py-1">
                                2
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
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
