@extends('layouts.main')
@section('content')
    <div class="max-w-full px-8 py-8 lg:px-16">
        <h1 class="text-center mb-8 md:text-4xl font-bold text-2xl">Our Services</h1>
        <div class="flex flex-row max-[1024px]:flex-wrap gap-12 justify-items-center justify-center">
            {{-- <div
                class="grid lg:grid-cols-3 gap-x-8 text-center lg:p-16 items-center rounded-3xl p-8 grid-cols-1 bg-indigo-300">
                <img src="image/inova-zenix.png" class="mx-auto object-contain w-80 h-80 relative rounded-3xl bg-white">
                <div class="md:col-span-2">
                    <h1 class="text-3xl mb-6 max-[1024px]:mt-6 font-bold text-white">Autohome Service</h1>
                    <p class="lg:px-24 mb-6 text-xl text-white">Membuat customer nyaman dengan order cuci mobil di rumah</p>
                    <a href="https://wa.me/6281332162952">
                        <button style="background-color: #5a4ae2"
                            class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full hover:scale-125">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div> --}}
            <div
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="image/shampoo_autogleam.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Autohome
                        Service
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bingung mengatur waktu unntuk cuci mobil?
                        Tenang, Autogleam memiliki layanan Autohome Service yang dapat membuat customer nyaman dengan order
                        cuci mobil di rumah</p>
                    <a href="https://wa.me/6281336183669" class="flex flex-row justify-center">
                        <button style="background-color: #5a4ae2"
                            class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full scale-95 hover:scale-100">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
            <div
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="image/shampoo_autogleam.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Autogleam's
                        Products
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bingung cari market untuk kebutuhan
                        otomotif? Autogleam adalah solusinya karena kami menyediakan berbagai produk yang dibutuhkan
                        para customer untuk
                        merawat
                        otomotif mereka. Kami selalu berusaha untuk menghadirkan produk yang belum dijual di marketplace</p>
                    <a href="#" class="flex flex-row justify-center">
                        <button style="background-color: #5a4ae2"
                            class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full scale-95 hover:scale-100">
                            Check Product
                        </button>
                    </a>
                </div>
            </div>
            {{-- <div
                class="grid lg:grid-cols-3 gap-x-8 text-center lg:p-16 items-center rounded-3xl p-8 grid-cols-1 bg-indigo-300">
                <img src="image/shampoo_autogleam.jpg"
                    class="mx-auto object-cover object-bottom w-80 h-80 relative rounded-3xl">
                <div class="md:col-span-2">
                    <h1 class="text-3xl mb-6 max-[1024px]:mt-6 font-bold text-white">Autogleam's Products</h1>
                    <p class="lg:px-24 text-xl text-white">Menyediakan berbagai produk yang dibutuhkan para customer untuk
                        merawat
                        automotif mereka</p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
