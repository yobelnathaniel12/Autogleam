@extends('layouts.main')
@section('content')
    <div class="pt-8 px-16 mb-8">
        <h1 class="text-center mb-8 md:text-4xl font-bold text-2xl">Produk-Produk Kami</h1>
        <div class="flex flex-row flex-wrap gap-12 justify-items-center justify-center">
            @foreach ($products as $product)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg h-72 w-full object-cover object-center"
                        src="{{ asset('image/' . $product->product_picture) }}" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $product->product_name }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->description }}</p>
                        <h5 class="mb-3 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Rp {{ number_format($product->price, 2, ',', '.') }}
                        </h5>
                        <a href="https://wa.me/6281336183669" class="flex flex-row justify-center">
                            <button style="background-color: #5a4ae2"
                                class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full scale-95 hover:scale-100">
                                Hubungi Kami
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
