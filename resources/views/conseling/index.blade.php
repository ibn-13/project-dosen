@extends('layouts.master')
@section('content')



<div class="content-body">
    <!-- app e-commerce details start -->
    <section class="app-ecommerce-details">
        <div class="card">
            <!-- Product Details starts -->
            <div class="card-body">

                <section id="carousel-crossfade">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">

                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                        data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../../../app-assets/images/slider/06.jpg"
                                                    class="img-fluid d-block w-100" alt="cf-img-1" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../../app-assets/images/slider/02.jpg"
                                                    class="img-fluid d-block w-100" alt="cf-img-2" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../../app-assets/images/slider/05.jpg"
                                                    class="img-fluid d-block w-100" alt="cf-img-3" />
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="col-12 ">
                    <h4>DosenKeren.ID</h4>

                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                        <h4 class="item-price mr-1">Chat dengan dosenmu bikin jadwal sekarang</h4>

                    </div>
                    <p class="card-text"><span class="text-success">saatnya temukan jawaban atas masalahmu dengan harga
                            yang terjangkau</span></p>
                    <p class="card-text">
                        mereka siap mendengarkan dan membantu mencari solusi dengan personal dan professional
                    </p>


                    <div class="d-flex flex-column flex-sm-row pt-1">
                        <a href="{{route('chat')}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                            <i data-feather="edit" class="mr-50"></i>
                            <span class="add-to-cart">Mulai Konseling</span>
                        </a>
                        <a href="{{route('learn')}}"
                            class="btn btn-outline-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                            <i data-feather="users" class="mr-50"></i>
                            <span>Buat janji</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details ends -->

        <!-- Item features starts -->

        <!-- Item features ends -->



</div>
</div>

<!-- Related Products ends -->

<!-- app e-commerce details end -->





@endsection