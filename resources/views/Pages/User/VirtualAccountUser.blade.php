<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pembayaran Living Cost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <x-layout-user>
        <div class="">
            <div class="pb-4">
                <a href="/MetodePembayaranUser?id={{ request()->query('id') }}">
                    <button type="button" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-1 pl-2 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Kembali
                    </button>
                </a>
            </div>
            <div class="name-bank-container h-18 col-span-1 mb-4 flex w-full items-center rounded-md border-gray-300">
                <img class="bank-image" src="" alt="Bank Image" style="width: 35px; height: 35px;">
                <h1 class="name-bank pl-4 text-xl font-bold">Nama Bank</h1>
            </div>
            <div class="pb-4">
                <div class="flex h-36 w-full items-center justify-between rounded-md border-2 border-gray-300 p-4">
                    <div class="">
                        <h1 class="pb-1 text-sm">No. Virtual Account </h1>
                        <h1 id="virtual-account" class="text-sm font-bold">{{ $va }}</h1>
                    </div>
                    <button id="copy-button" class="font-bold text-blue-600">Salin</button>
                </div>
            </div>
            <div class="h-18 flex w-full items-center rounded-md border-2 border-gray-300 bg-gray-200 p-4">
                <div class="flex">
                    <h1 class="text-sm font-bold">Total : </h1>
                </div>
                <div class="w-full flex-1 text-end font-bold">
                    <h1 class="">Rp. {{ number_format($harga->amoung, 2, ',', '.') }}</h1>
                </div>
            </div>
        </div>
        <x-tab-user />
    </x-layout-user>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Mengambil nama bank dan gambar dari localStorage dan menampilkannya
        document.addEventListener('DOMContentLoaded', function() {
            var bankName = localStorage.getItem('selectedBank');
            var bankImage = localStorage.getItem('selectedBankImage');
            if (bankName && bankImage) {
                document.querySelector('.name-bank').textContent = bankName;
                document.querySelector('.bank-image').src = bankImage;
            }
        });

        // Fungsi untuk menyalin nomor Virtual Account
        document.getElementById('copy-button').addEventListener('click', function() {
            var virtualAccount = document.getElementById('virtual-account').textContent;
            var copyButton = document.getElementById('copy-button');
            navigator.clipboard.writeText(virtualAccount).then(function() {
                copyButton.textContent = 'Disalin';
                setTimeout(function() {
                    copyButton.textContent = 'Salin';
                }, 3000);
            }, function(err) {
                console.error('Gagal menyalin teks: ', err);
            });
        });
    </script>
</body>

</html>
