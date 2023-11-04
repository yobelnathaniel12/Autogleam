@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="padding-inline: 5%">
        <div class="py-5" style="height: 90vh">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                    <p class="lead mb-0"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quo quidem
                        quos porro harum labore nemo sequi odit voluptatem, ipsum aperiam, sint nam, tempore vero veniam
                        sapiente voluptas eos atque? </p>
                    <div class="pt-3">
                        <button type="button" class="btn btn-primary btn-lg" style="background-color: #5a4ae2;">Check
                            Our Catalog</button>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="image/inova-zenix.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fs-1 fw-semibold" style="color: #5a4ae2;"> Layanan Kami </h2>
                    <span class="fs-5"> Apa yang kami tawarkan </span>
                </div>
            </div>

            <div class="container-fluid", style="padding-inline: 5%">
                <div class="py-5">
                    <div class="row text-center d-flex justify-content-center align-items-center mb-5">
                        <div
                            class="my-4 me-4 col-lg-5 order-2 order-lg-1 feature-card d-flex flex-column rounded-4 p-4 text-center shadow">
                            <div
                                class="circle-icon rounded-circle d-flex justify-content-center align-items-center w-70 h-70 mx-auto">
                                <img class="img-fluid" src="image/product.png" alt=""
                                    style="max-width: 70px; max-height: 70px">
                            </div>

                            <h3 class="mt-3"> Product </h3>
                            <p class="mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quos, aliquam
                                eum ratione error expedita voluptates quod, facilis eligendi veritatis, at libero
                                commodi pariatur ea ab consequatur nostrum minus enim.
                            </p>
                        </div>
                        <div
                            class="my-4 me-4 col-lg-5 order-1 order-lg-2 feature-card d-flex flex-column rounded-4 p-4 text-center shadow">
                            <div
                                class="circle-icon rounded-circle d-flex justify-content-center align-items-center w-70 h-70 mx-auto">
                                <img class="img-fluid" src="image/service.png" alt=""
                                    style="max-width: 70px; max-height: 70px">
                            </div>

                            <h3 class="mt-3"> Services </h3>
                            <p class="mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quos, aliquam
                                eum ratione error expedita voluptates quod, facilis eligendi veritatis, at libero
                                commodi pariatur ea ab consequatur nostrum minus enim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
