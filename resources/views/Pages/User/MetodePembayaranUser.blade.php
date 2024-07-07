<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Metode Pembayaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        .bank-option {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .bank-option:hover,
        .bank-option.active {
            border-color: #86B6F6;
            background-color: #B4D4FF;
        }
    </style>
</head>

<body>
    <x-layout-user>
        <x-navbar-user title="{{ request()->cookie('username') }}" />
        <div class="pb-4">
            <a href="/PembayaranUser">
                <button type="button" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-2 pl-2 text-center text-sm font-medium text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Kembali
                </button>
            </a>
        </div>
        <div class="pb-2">
            <h1 class="italic">*Silahkan pilih metode pembayaran</h1>
        </div>
        <div class="wrap">
            <div class="wrap-pay">
                <div class="pb-2">
                    <div class="bank-option" data-bank="BRIVA" data-image="image/bri.svg">
                        <div class="h-18 col-span-1 flex w-full rounded-md border-2 border-gray-300">
                            <div class="flex p-4">
                                <img src="image/bri.svg" class="h-10 w-10">
                                <h1 class="pl-4 pt-1 text-xl font-bold">BANK BRI</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="bank-option" data-bank="BNIVA" data-image="image/bni.svg">
                        <div class="h-18 col-span-1 flex w-full rounded-md border-2 border-gray-300">
                            <div class="flex p-4">
                                <img src="image/bni.svg" class="h-10 w-10">
                                <h1 class="pl-4 pt-1 text-xl font-bold">BANK BNI</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="bank-option" data-bank="BCAVA" data-image="image/bca.svg">
                        <div class="h-18 col-span-1 flex w-full rounded-md border-2 border-gray-300">
                            <div class="flex p-4">
                                <img src="image/bca.svg" class="h-10 w-10">
                                <h1 class="pl-4 pt-1 text-xl font-bold">BANK BCA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="h-18 flex w-full items-center rounded-md border-2 border-gray-300 bg-gray-200 p-4">
                <div class="flex">
                    <h1 class="text-sm font-bold">Total : </h1>
                </div>
                <div class="w-full flex-1 text-end font-bold">
                    <h1 class="">Rp. {{ number_format($harga->amoung, 2, ',', '.') }}</h1>
                </div>
            </div>
        </div>
        <div class="float-right flex pt-4">
            <a href="#" id="pay-now">
                <button type="button" class="inline-flex items-center rounded-lg bg-[#F5E81D] px-5 py-3 text-center text-sm font-bold text-black hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-400 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    Bayar Sekarang
                </button>
            </a>
        </div>
        <x-tab-user />
    </x-layout-user>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.querySelectorAll('.bank-option').forEach(function(element) {
            element.addEventListener('click', function() {
                document.querySelectorAll('.bank-option').forEach(function(el) {
                    el.classList.remove('active');
                });
                this.classList.add('active');

                var bankName = this.getAttribute('data-bank');
                var bankImage = this.getAttribute('data-image');
                localStorage.setItem('selectedBank', bankName);
                localStorage.setItem('selectedBankImage', bankImage);
                document.querySelector('#pay-now').setAttribute('href', '/VirtualAccountUser?id={{ request()->query('id') }}&bank=' + bankName);
            });
        });
    </script>
</body>

</html>
