<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-admin>
        <x-navbar-admin title="Dashboard Pengelolaan Living Cost" />
        <div class="flex p-8  ">
            <div class="flex-grow overflow-auto w-full">
                <div class="flex justify-center gap-12">
                    <a href="/PemasukanAdmin">
                        <div class="flex items-center justify-center h-56 w-72 col-span-1 border-gray-300 rounded-md bg-yale-blue">
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
                    <a href="/PendataanSiswaAdmin">
                        <div class="flex items-center justify-center h-56 w-72 col-span-1 border-gray-300 rounded-md bg-yale-blue">
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
                </div>
            </div>
    </x-layout-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
