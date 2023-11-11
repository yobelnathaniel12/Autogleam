@extends('layouts.main')

@section('content')
    @include('content_template.hero_section')

    <div id="explore_about_us" class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <img src="image/vision_illustration.png" alt="mockup">
        </div>

        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-6 text-xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                <span style="color: #5a4ae2"> Tujuan </span> Perusahaan
            </h1>
            <h2 class="max-w-2xl font-bold text-gray-500 md:text-lg lg:text-xl dark:text-gray-400"> Visi Kami </h2>
            <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> Membantu
                konsumen untuk membuat mobil selalu bersih dan membantu UMKM carwash untuk berkembang </p>
            <h2 class="max-w-2xl font-bold text-gray-500 md:text-lg lg:text-xl dark:text-gray-400"> Misi Kami </h2>
            <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> Membuat
                aplikasi yang interaktif serta produk yang lebih murah dan efisien untuk carwash </p>

        </div>

    </div>

    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

        <div class="mr-auto place-self-center lg:col-span-7">
            <h1
                class="max-w-2xl mb-6 text-xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                <span style="color: #5a4ae2"> Kontak </span> Perusahaan
            </h1>

            <h2 class="max-w-2xl font-bold text-gray-500 md:text-lg lg:text-xl dark:text-gray-400"> Email : <span>
                    <p class="max-w-2xl font-light text-gray-700 lg:mb-3 md:text-lg lg:text-xl dark:text-gray-400">
                        autogleam19@gmail.com </p>
                </span> </h2>
            <div class="mb-3">
                <h2 class="max-w-2xl font-bold text-gray-500 md:text-lg lg:text-xl dark:text-gray-400"> Instagram : </h2>
                <a href="https://instagram.com/autogleam_id?igshid=dWpiNnJwNGNwN2cy"
                    class="max-w-2xl font-light text-gray-700 lg:mb-3 md:text-lg lg:text-xl dark:text-gray-400">
                    @autogleam_id </a>
            </div>
            <div class="mb-3">
                <h2 class="max-w-2xl font-bold text-gray-500 md:text-lg lg:text-xl dark:text-gray-400"> WhatsApp : </h2>
                <a href="https://wa.me/6281336183669"
                    class="max-w-2xl font-light text-gray-700 lg:mb-3 md:text-lg lg:text-xl dark:text-gray-400">
                    (+62) 813-3618-3669 </a>
            </div>

        </div>

        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <img src="image/contact_us_illustration.png" alt="mockup">
        </div>

    </div>

    <!-- component -->
    <!-- MDI Icons -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

    <!-- Page Container -->
    <div class="flex items-center justify-center min-h-screen bg-white pt-12 pb-40">
        <div class="flex flex-col">
            <!-- Notes -->

            <div class="flex flex-col mt-8">
                <!-- Meet the Team -->
                <div class="container max-w-7xl px-4">
                    <!-- Section Header -->
                    <div class="flex flex-wrap justify-center text-center mb-24">
                        <div class="w-full lg:w-6/12 px-4">
                            <!-- Header -->
                            <h1
                            class="max-w-2xl mb-6 text-xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                            Tim <span style="color: #5a4ae2"> AUTOGLEAM </span>
                        </h1>

                            <!-- Description -->
                            <p class="max-w-2xl font-light text-gray-700 lg:mb-3 md:text-lg lg:text-xl dark:text-gray-400">
                                Kenali Wajah-wajah yang Mendorong Visi <span style="color: #5a4ae2"> AUTOGLEAM </span> ke
                                Depan. </p>
                        </div>
                    </div>

                    <!-- Team Members -->
                    <div class="flex flex-wrap">
                        <!-- Member #1 -->
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <!-- Avatar -->
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        style="height:280px; width: 250px" src="image/founders/Richard Hermawan.PNG">
                                </a>

                                <!-- Details -->
                                <div class="text-center mt-6">
                                    <!-- Name -->
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Richard Hermawan
                                    </h1>

                                    <!-- Title -->
                                    <div class="text-gray-700 font-light mb-2">
                                        Chief Executive Officer (CEO)
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Member #2 -->
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <!-- Avatar -->
                                <a href="#" class="mx-auto">
                                    <img style="height:280px; width: 250px"
                                        class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        src="image/founders/Angga.PNG">
                                </a>

                                <!-- Details -->
                                <div class="text-center mt-6">
                                    <!-- Name -->
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Angga Saputra Wibowo
                                    </h1>

                                    <!-- Title -->
                                    <div class="text-gray-700 font-light mb-2">
                                        Chief Operating Officer (COO)
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Member #3 -->
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <!-- Avatar -->
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        style="height:280px; width: 250px" src="image/founders/Vincent.jpg">
                                </a>

                                <!-- Details -->
                                <div class="text-center mt-6">
                                    <!-- Name -->
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Vincent Anggriawan
                                    </h1>

                                    <!-- Title -->
                                    <div class="text-gray-700 font-light mb-2">
                                        Chief Marketing Officer (CMO)
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Member #4 -->
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <!-- Avatar -->
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        style="height:280px; width: 250px" src="image/founders/Vita.jpg">
                                </a>

                                <!-- Details -->
                                <div class="text-center mt-6">
                                    <!-- Name -->
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Vita Tiania Pattiwel
                                    </h1>

                                    <!-- Title -->
                                    <div class="text-gray-700 font-light mb-2">
                                        Chief Technology Officer (CTO)
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
