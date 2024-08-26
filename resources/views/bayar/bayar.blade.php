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


                        </div>

                    </div>
                </div>
            </div>


            <section id="nav-filled">
                <div class="row match-height">
                    <!-- Filled Tabs starts -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">metode pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-fill" data-toggle="tab"
                                            href="#home-fill" role="tab" aria-controls="home-fill"
                                            aria-selected="true">Virtual Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill"
                                            role="tab" aria-controls="profile-fill" aria-selected="false">qris</a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content pt-1">
                                    <div class="tab-pane active" id="home-fill" role="tabpanel"
                                        aria-labelledby="home-tab-fill">
                                        <div class="row mt-1">
                                            <div class="col-12">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active"
                                                        id="list-home-list" data-toggle="list" href="#list-home"
                                                        role="tab" aria-controls="list-home">BRI</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-profile-list" data-toggle="list" href="#list-profile"
                                                        role="tab" aria-controls="list-profile">BNI</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-messages-list" data-toggle="list" href="#list-messages"
                                                        role="tab" aria-controls="list-messages">MANDIRI</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-settings-list" data-toggle="list" href="#list-settings"
                                                        role="tab" aria-controls="list-settings">BCA</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile-fill" role="tabpanel"
                                        aria-labelledby="profile-tab-fill">
                                        <div class="row mt-1">
                                            <div class="col-6">

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none bg-transparent border-success">
                            <div class="card-body">
                                <h4 class="card-title">Total Bayar</h4>


                                <!-- Nested FAQ Section -->
                                <div class="row">
                                    <!-- Collapse Section -->
                                    <div class="col-6">
                                        <div class="collapse-margin collapse-icon mt-2" id="faq-payment-qna">
                                            <div class="card">
                                                <div class="card-header" id="paymentOne" data-toggle="collapse"
                                                    role="button" data-target="#faq-payment-one" aria-expanded="false"
                                                    aria-controls="faq-payment-one">
                                                    <span class="lead collapse-title">Harga</span>
                                                </div>
                                                <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne"
                                                    data-parent="#faq-payment-qna">
                                                    <div class="card-body">
                                                        keterangan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button Section -->

                                    <div class="card-body">

                                        <div class="demo-inline-spacing">
                                            <button type="button" class="btn btn-outline-success"
                                                id="type-success">bayar</button>

                                        </div>
                                    </div>
                                </div>
            </section>
        </div>


        <!-- End of FAQ Section -->

    </div>
    </div>
    </div>

    <!-- Filled Tabs ends -->

    <!-- Justified Tabs starts -->

    <!-- Justified Tabs ends -->
    </div>
</section>












</div>
</div>
</div>
</div>
</section>
</div>


</div>
</section>

</div>
</section>
@endsection