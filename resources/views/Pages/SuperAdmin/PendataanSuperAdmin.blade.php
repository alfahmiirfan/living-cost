{{-- <x-navbar-super-admin>Pengelolaan Keuangan - Pengeluaran</x-navbar-super-admin> --}}
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pendataan Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>

<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Pendataan Siswa" />
        <div class="flex">
            <x-search-super-admin />
            <div class="top-30 absolute right-10 flex items-center justify-between rounded-md">
                <a href="#  ">
                    {{-- <button id="importBtn" type="button" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-import">
                            <path d="M12 3v12" />
                            <path d="m8 11 4 4 4-4" />
                            <path d="M8 5H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-4" />
                        </svg>
                        Import Data Siswa
                    </button> --}}
                    <form action="/siswa/excel" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex">
                            <div class="border-2 rounded-lg h-10 flex items-center text-center justify-center">
                                <input type="file" name="excel" id="" class="rounded-lg">
                            </div>
                            <button type="submit" class="ml-2 h-10  flex items-center rounded-lg bg-[#F5E81D] px-5 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-import">
                                    <path d="M12 3v12" />
                                    <path d="m8 11 4 4 4-4" />
                                    <path d="M8 5H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-4" />
                                </svg>
                                Import
                            </button>
                        </div>
                    </form>
                    @error('excel')
                    <p>{{ $message }}</p>
                    @enderror
                </a>

                <!-- Tambahkan input type file di sini -->
                <input type="file" id="fileInput" style="display: none;" accept=".csv,.xlsx,.xls" />

                <a href="Pendataan-TambahSuperAdmin">
                    <button type="button" class="ml-2 inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.75 3.75H6.25C4.86929 3.75 3.75 4.86929 3.75 6.25V23.75C3.75 25.1307 4.86929 26.25 6.25 26.25H23.75C25.1307 26.25 26.25 25.1307 26.25 23.75V6.25C26.25 4.86929 25.1307 3.75 23.75 3.75Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 15H20" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 10V20" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Tambah
                    </button>
                </a>
            </div>

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
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Angkatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $index => $data)
                    <tr class="border-b bg-white text-sm dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row" class="whitespace-nowrap px-6 py-2 font-medium text-gray-900 dark:text-white">
                            {{ (is_numeric(request()->query('page')) && request()->query('page') !== null ? (request()->query('page') - 1) * 5 : 0) + $loop->iteration }}
                        </th>
                        <td class="px-6 py-2">
                            {{ $data['nama'] }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $data['nisn'] }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $data['angkatan'] }}
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="/Pendataan-UbahSuperAdmin?id={{ $data['id'] }}" class="pr-2">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                        <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="/DetailPembayaranSiswa-SuperAdmin?id={{ $data['id'] }}" class="inline-flex w-8 items-center justify-center rounded-lg bg-yale-blue text-center text-sm font-medium text-white hover:bg-yale-blue focus:outline-none focus:ring-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </a>
                                <x-pop-up-delete id="{{ $data['id'] }}" />
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $siswa->links() }}
        </div>
        {{-- <div class="absolute bottom-0 flex pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright">
                <circle cx="12" cy="12" r="10" />
                <path d="M14.83 14.83a4 4 0 1 1 0-5.66" />
            </svg>
            <h1 class="pl-2 pr-2 text-sm font-semibold">Created by Muhammad Alfahmi Irfan | 2024 </h1>
            <h1></h1>?
        </div> --}}
    </x-layout-super-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        document.getElementById('importBtn').addEventListener('click', function() {
            // Trigger klik pada input file
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Lakukan sesuatu dengan file yang diupload
                console.log('File yang diunggah:', file.name);

                // Kamu bisa menggunakan FormData untuk mengirim file ke server
                let formData = new FormData();
                formData.append('file', file);

                fetch('/siswa/excel', {
                        method: 'POST'
                        , body: formData
                    }).then(response => response.json())
                    .then(data => console.log('Success:', data))
                    .catch(error => console.error('Error:', error));
            }
        });

    </script>
</body>

</html>
