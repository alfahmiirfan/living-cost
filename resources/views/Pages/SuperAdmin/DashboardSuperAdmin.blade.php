<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
    <style>
        @keyframes moving-border {
            0% {
                border-color: white;
            }

            50% {
                border-color: #297785;
            }

            100% {
                border-color: white;
            }
        }

        #moving-border {
            animation: moving-border 3s infinite;
        }

    </style>
</head>
<body>
    <x-layout-super-admin>
        <div class="">
            <x-navbar-super-admin title="Dashboard Pengelolaan Living Cost" />
            <div class="flex p-8  ">
                <div class="flex-grow overflow-auto w-full">
                    <div class="grid grid-cols-2 gap-8">
                        <a href="/PemasukanSuperAdmin">
                            <div class="flex items-center justify-center h-48 w-70 col-span-1 border-gray-300 rounded-md bg-yale-blue">
                                <div class="pt-8 justify-items-end flex-row items-center justify-center">
                                    <div class=" flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" h-20 w-20  text-white lucide lucide-hand-coins">
                                            <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17" />
                                            <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9" />
                                            <path d="m2 16 6 6" />
                                            <circle cx="16" cy="9" r="2.9" />
                                            <circle cx="6" cy="5" r="3" />
                                        </svg>
                                    </div>
                                    <div class="pt-8">
                                        <p class="text-white text-base tracking-wide">Pengelolaan Keuangan</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="PendataanSiswaSuperAdmin">
                            <div class="flex items-center justify-center h-48 w-70 col-span-1 border-gray-300 rounded-md bg-yale-blue">
                                <div class="pt-8 justify-items-end flex-row items-center justify-center">
                                    <div class=" flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-20 w-20 text-white lucide lucide-user-round">
                                            <circle cx="12" cy="8" r="5" />
                                            <path d="M20 21a8 8 0 0 0-16 0" /></svg>
                                    </div>
                                    <div class="pt-8">
                                        <p class="text-white text-base tracking-wide">Pendataan Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="PengelolaanAdminSuperAdmin">
                            <div class="flex items-center justify-center h-48 w-70 col-span-1 border-gray-300 rounded-md bg-yale-blue">
                                <div class="pt-8 justify-items-end flex-row items-center justify-center">
                                    <div class=" flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-20 w-20 text-white lucide lucide-user-round-cog">
                                            <path d="M2 21a8 8 0 0 1 10.434-7.62" />
                                            <circle cx="10" cy="8" r="5" />
                                            <circle cx="18" cy="18" r="3" />
                                            <path d="m19.5 14.3-.4.9" />
                                            <path d="m16.9 20.8-.4.9" />
                                            <path d="m21.7 19.5-.9-.4" />
                                            <path d="m15.2 16.9-.9-.4" />
                                            <path d="m21.7 16.5-.9.4" />
                                            <path d="m15.2 19.1-.9.4" />
                                            <path d="m19.5 21.7-.4-.9" />
                                            <path d="m16.9 15.2-.4-.9" />
                                        </svg>
                                    </div>
                                    <div class="pt-8">
                                        <span class="text-white">Pengelolaan Admin</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="LaporanSuperAdmin">
                            <div class="flex items-center justify-center h-48 w-70 col-span-1 border-gray-300 rounded-md bg-yale-blue">
                                <div class="pt-8 justify-items-end flex-row items-center justify-center">
                                    <div class=" flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-20 w-20 text-white lucide lucide-book-text">
                                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                                            <path d="M8 7h6" />
                                            <path d="M8 11h8" />
                                        </svg>
                                    </div>
                                    <div class="pt-8">
                                        <span class="text-white">Laporan Keuangan</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex-grow pl-6 overflow-auto bg-gray">
                    <div class="grid grid-cols-2 gap-4">
                        <a>
                            <div class="mt-3 col-end-7 col-span-2 w-72 rounded-md bg-[#F0F2F8] border-4 border-yale-blue " id="moving-border">
                                <div class="rounded-lg overflow-hidden  h-96 flex m-auto items-center ">
                                    <canvas class="tetx-white" id="chartDoughnut"></canvas>
                                </div>
                                <!-- Required chart.js -->
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <!-- Chart doughnut -->
                                <script>
                                    const dataDoughnut = {
                                        labels: ["Pelunasan", "Belum Bayar", "Telat Bayar"]
                                        , datasets: [{
                                            label: "Jumlah "
                                            , data: [70, 30, 25]
                                            , backgroundColor: [
                                                "#32D62F"
                                                , "#F5E81D"
                                                , "#F72323"
                                            , ]
                                            , borderColor: [
                                                "#F0F2F8"
                                            ]
                                            , hoverOffset: 4
                                        , }, ]
                                    , };
                                    const configDoughnut = {
                                        type: "doughnut"
                                        , data: dataDoughnut
                                        , options: {}
                                    , };
                                    var chartBar = new Chart(
                                        document.getElementById("chartDoughnut")
                                        , configDoughnut
                                    );

                                </script>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
