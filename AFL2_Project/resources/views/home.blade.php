@extends('layouts.main')

@section('content')
    <section class="bg-white dark:bg-gray-900 flex items-center justify-center" style="height: 90vh">

        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Payments tool for software companies</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                    payment stack.</p>
                <a href="#" style="background-color: #5a4ae2"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Check Our Catalog
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="image/inova-zenix.png" alt="mockup">
            </div>
        </div>

    </section>

    <div class="text-center py-10 item-center h-screen">

        <h1 class="text-4xl w-96 mx-auto leading-normal font-bold mb-12">Layanan yang kami sediakan</h1>
        <div class="flex flex-col md:flex-row lg:flex-row gap-8 max-w-5xl mx-auto group">

            <div class="flex-1 bg-white/10 p-8 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 duration-500 cursor-pointer rounded-xl mix-blend-luminosity">
                <img src="image/product.png" alt="" class="h-20 mx-auto">
                <h4 class="uppercase text-xl font-bold"> Produk </h4>
                <p class="text-sm leading-7 my-3 opacity-70">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cupiditate dicta necessitatibus et eum neque, id aspernatur qui sit nihil ipsum, ducimus nobis! Velit aperiam exercitationem iste tenetur laudantium facilis!
                </p>
                <button style="background-color: #5a4ae2" class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full">
                    Go
                </button>
            </div>

            <div class="flex-1 bg-white/10 p-8 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 duration-500 cursor-pointer rounded-xl mix-blend-luminosity">
                <img src="image/service.png" alt="" class="h-20 mx-auto">
                <h4 class="uppercase text-xl font-bold"> Jasa </h4>
                <p class="text-sm leading-7 my-3 opacity-70">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cupiditate dicta necessitatibus et eum neque, id aspernatur qui sit nihil ipsum, ducimus nobis! Velit aperiam exercitationem iste tenetur laudantium facilis!
                </p>
                <button style="background-color: #5a4ae2" class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full">
                    Go
                </button>
            </div>

        </div>

    </div>
@endsection
