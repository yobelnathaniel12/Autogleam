@extends('layouts.main')

@section('content')

    @include('content_template.hero_section')

    <div class="text-center py-10 item-center max-w-full">

        <h1 class="text-4xl w-96 mx-auto leading-normal font-bold mb-12">Layanan yang kami sediakan</h1>
        <div class="flex flex-col md:flex-row lg:flex-row gap-8 max-w-5xl mx-auto group">

            <div class="flex-1 bg-white/10 p-8 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 duration-500 cursor-pointer rounded-xl mix-blend-luminosity">
                <img src="image/product.png" alt="" class="h-20 mx-auto">
                <h4 class="uppercase text-xl font-bold"> Produk </h4>
                <p class="text-sm leading-7 my-3 opacity-70">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cupiditate dicta necessitatibus et eum neque, id aspernatur qui sit nihil ipsum, ducimus nobis! Velit aperiam exercitationem iste tenetur laudantium facilis!
                </p>
                <a href="/products">
                    <button style="background-color: #5a4ae2" class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full">
                        Go
                    </button>
                </a>
            </div>

            <div class="flex-1 bg-white/10 p-8 group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 duration-500 cursor-pointer rounded-xl mix-blend-luminosity">
                <img src="image/service.png" alt="" class="h-20 mx-auto">
                <h4 class="uppercase text-xl font-bold"> Jasa </h4>
                <p class="text-sm leading-7 my-3 opacity-70">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cupiditate dicta necessitatibus et eum neque, id aspernatur qui sit nihil ipsum, ducimus nobis! Velit aperiam exercitationem iste tenetur laudantium facilis!
                </p>
                <a href="/services">
                    <button style="background-color: #5a4ae2" class="font-semibold text-white bg-btn-primay py-2.5 px-8 rounded-full">
                        Go
                    </button>
                </a>

            </div>

        </div>

    </div>
@endsection
