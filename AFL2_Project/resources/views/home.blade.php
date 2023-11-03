@extends('layouts.main')

@section('content')
    <div class="sider">
        <div class="text-center align-items-center d-flex try">
            <div class=" set-location row">
                <div class="set-flex col-sm-6 point-text">

                    <h1 class="custom-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                    <h3 class="custom-sec-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quo quidem
                        quos porro harum labore nemo sequi odit voluptatem, ipsum aperiam, sint nam, tempore vero veniam
                        sapiente voluptas eos atque?</h3>

                    <div class="pt-3">
                        <button type="button" class="btn btn-primary btn-lg" style="background-color: #5a4ae2;">Check Our Catalog</button>
                    </div>

                </div>
                <div class=" set-flex col-sm-4">
                    <img src="image/inova-zenix.png" class="custom-img" alt="homeImage">
                </div>
            </div>
        </div>

        <div id="feature-home">

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="feature-text"> Layanan Kami </h2>
                        <span class="sub-title"> Apa yang kita tawarkan </span>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="text-center set-layout">

                        <div class="set-position px-3">
                            <div class="feature-card">
                                <div class="circle-icon mx-auto">
                                    <img class="position-absolute top-50 start-50 translate-middle" src="image/product.png" alt="">
                                </div>
                                <h3 class="mt-3"> Product </h3>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quos, aliquam eum ratione error expedita voluptates quod, facilis eligendi veritatis, at libero commodi pariatur ea ab consequatur nostrum minus enim.
                                </p>
                            </div>
                        </div>

                        <div class="set-position px-3">
                            <div class="feature-card">
                                <div class="circle-icon mx-auto">
                                    <img class="position-absolute top-50 start-50 translate-middle" src="image/service.png" alt="">
                                </div>
                                <h3 class="mt-3"> Services </h3>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quos, aliquam eum ratione error expedita voluptates quod, facilis eligendi veritatis, at libero commodi pariatur ea ab consequatur nostrum minus enim.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
