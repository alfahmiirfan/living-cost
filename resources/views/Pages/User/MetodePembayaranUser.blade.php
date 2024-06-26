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

        .bank-option:hover, .bank-option.active {
            border-color: #86B6F6;
            background-color: #B4D4FF;
        }
    </style>
</head>
<body>
    <x-layout-user>
        <x-navbar-user title="Muhammad Alfahmi Irfan" />
        <div class="pb-4">
            <a href="/PembayaranUser">
                <button type="button" class="pl-2 px-5 py-2 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
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
                    <div class="bank-option" data-bank="BANK BRI" data-image="image/bri.svg">
                        <div class="border-2 flex h-18 w-full col-span-1 border-gray-300 rounded-md">
                            <div class="p-4 flex">
                                <img src="image/bri.svg" class="w-10 h-10">
                                <h1 class="pt-1 pl-4 font-bold text-xl">BANK BRI</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="bank-option" data-bank="BANK BNI" data-image="image/bni.svg">
                        <div class="border-2 flex h-18 w-full col-span-1 border-gray-300 rounded-md">
                            <div class="p-4 flex">
                                <img src="image/bni.svg" class="w-10 h-10">
                                <h1 class="pt-1 pl-4 font-bold text-xl">BANK BNI</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="bank-option" data-bank="BANK BCA" data-image="image/bca.svg">
                        <div class="border-2 flex h-18 w-full col-span-1 border-gray-300 rounded-md">
                            <div class="p-4 flex">
                                <img src="image/bca.svg" class="w-10 h-10">
                                <h1 class="pt-1 pl-4 font-bold text-xl">BANK BCA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-gray-200 p-4 border-2 flex items-center h-18 w-full border-gray-300 rounded-md">
                <div class="flex">
                    <h1 class="text-sm font-bold">Total : </h1>
                </div>
                <div class="font-bold flex-1 w-full text-end">
                    <h1 class="">Rp. 1.250.000</h1>
                </div>
            </div>
        </div>
        <div class="pt-4 flex float-right">
            <a href="#" id="pay-now">
                <button type="button" class="font-bold px-5 py-3 text-sm  text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
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
                document.querySelector('#pay-now').setAttribute('href', '/VirtualAccountUser?bank=' + bankName);
            });
        });

    </script>
</body>
</html>
