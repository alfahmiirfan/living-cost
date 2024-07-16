<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pengeluaran Super Admin - Tambah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Pengelolaan Keuangan - Pengeluaran" />
        <form action="" method="POST">
            @csrf
            <div class=" ">
                <div class="">
                    <a href="PengeluaranSuperAdmin">
                        <button type="button" class="pl-2 px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
            <div class="">
                <h1 class="text-3xl font-semibold mt-2">Tambah Pesanan</h1>
            </div>
            <div class="pt-6">
                <h1 class="text-lg font-light">Nama Item</h1>
                <div class="w-full ">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        </div>
                        <input name="nama_item" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama item" required value="{{old('nama_item')}}" />
                        @error('nama_item')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex pt-6 ">
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Kategori</h1>
                    <div class="max-w-sm mx-auto">
                        <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300  text-sm font-light rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($kategori as $item)
                            <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Jumlah</h1>
                    <div class="pb-6  ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input name="jumlah" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan jumlah" required value="{{old('jumlah')}}" />
                            @error('jumlah')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-[25%] pr-6">
                    <h1 class="text-lg font-light">Harga</h1>
                    <div class="pb-6  ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="flex items-center font-light relative">Rp.
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input name="harga" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan harga" required value="{{old('harga')}}" />
                            @error('harga')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-[25%]">
                    <h1 class="text-lg font-light">Tanggal</h1>
                    <div class="pb-6  ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input name="tanggal" type="search" id="default-search" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan tanggal" required value="{{old('tanggal')}}" />
                            @error('tanggal')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-10 right-10 flex justify-between items-center rounded-md">
                <a href="#">
                    <button type="submit" class="px-5 py-1.5 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <span class="group-hover:text-gray-700">Simpan</span>
                    </button>
                </a>
            </div>
        </form>
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
