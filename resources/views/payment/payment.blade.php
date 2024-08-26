@extends('layouts.master')
@section('content')



<section id="card-demo-example">
    <div class="row match-height">


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">nama dosen</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        universitas
                    </p>
                    <div class="media-list">
                        <div class="media">
                            <div class="media-left">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar"
                                    height="64" width="64" class="cursor-pointer" />
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">experience</h4>
                                keterangan

                            </div>

                            <div class="d-flex flex-column flex-sm-row pt-1">
                                <a href="{{route('learn')}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                                    <i data-feather="edit" class="mr-50"></i>
                                    <span class="add-to-cart">Ganti</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>










            <div class="card shadow-none bg-transparent border-success">
                <div class="card-body">
                    <h4 class="card-title">Detail Konseling</h4>
                    <p class="card-text">nama dosen</p>
                    <p class="card-text">keterangan Harga</p>

                    <!-- Nested FAQ Section -->
                    <div class="collapse-margin collapse-icon mt-2" id="faq-payment-qna">
                        <div class="card">
                            <div class="card-header" id="paymentOne" data-toggle="collapse" role="button"
                                data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                                <span class="lead collapse-title">selengkapnya</span>
                            </div>
                            <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne"
                                data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    keterangan
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row pt-1">
                            <a href="{{route('bayar')}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                                <i data-feather="users" class="mr-50"></i>
                                <span class="add-to-cart">konfirmasi dan lanjut bayar</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of FAQ Section -->

                </div>
            </div>
        </div>


    </div>
</section>

</div>
</section>
@endsection