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
        <div class="flex items-center justify-between pb-4 pt-4">
            <h1 class="text-base font-bold">Dashboard </h1>
            <div class="rounded-md">
                <a href="/LogoutUser">
                    <button type="button" class="m-auto rounded-lg bg-[#F5E81D] px-3 py-2 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <div class="w-full">
            <div class="grid gap-6">
                <a href="/PembayaranUser">
                    <div class="col-span-1 flex h-36 w-full items-center justify-center rounded-md border-gray-300 bg-yale-blue">
                        <div class="flex-row items-center justify-center justify-items-end pt-2">
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet h-10 w-10 text-white">
                                    <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                                    <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                                </svg>
                            </div>
                            <div class="pt-4">
                                <p class="text-base tracking-wide text-white">Pembayaran Living Cost</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/InformasiUser">
                    <div class="col-span-1 flex h-36 w-full items-center justify-center rounded-md border-gray-300 bg-yale-blue">
                        <div class="flex-row items-center justify-center justify-items-end pt-2">
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round h-10 w-10 text-white">
                                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                                    <path d="M8 7h6" />
                                    <path d="M8 11h8" />
                                </svg>
                            </div>
                            <div class="pt-2">
                                <p class="text-base tracking-wide text-white">Informasi Pembayaran Living Cost</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <x-tab-user />
        </div>
    </x-layout-user>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
