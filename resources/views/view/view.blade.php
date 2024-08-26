@extends('layouts.master')
@section('content')

<!-- BEGIN: Main Menu-->

<!-- END: Main Menu-->

<!-- BEGIN: Content-->

<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">


    </div>
    <div class="content-body">
        <div id="user-profile">
            <!-- profile header -->
            <div class="row">
                <div class="col-12">
                    <div class="card profile-header mb-2">
                        <!-- profile cover photo -->
                        <img class="card-img-top" src="../../../app-assets/images/profile/user-uploads/timeline.jpg"
                            alt="User Profile Image" />
                        <!--/ profile cover photo -->

                        <div class="position-relative">
                            <!-- profile picture -->
                            <div class="profile-img-container d-flex align-items-center">
                                <div class="profile-img">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                                        class="rounded img-fluid" alt="Card image" />
                                </div>
                                <!-- profile title -->
                                <div class="profile-title ml-3">
                                    <h1 class="text-white">Kitty Allanson</h1>
                                    <p class="text-white">UNIVERSITAS</p>

                                </div>

                            </div>
                        </div>

                        <!-- tabs pill -->
                        <div class="profile-header-nav">
                            <!-- navbar -->
                            <nav
                                class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                <button class="btn btn-icon navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i data-feather="align-justify" class="font-medium-5"></i>
                                </button>


                            </nav>
                            <!--/ navbar -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ profile header -->

            <!-- profile info section -->
            <section id="profile-info">
                <div class="row">
                    <!-- left profile info section -->
                    <div class="col-12 ">
                        <!-- about -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-75">fakultas:</h5>
                                <p class="card-text"> -

                                </p>
                                <div class="mt-2">
                                    <h5 class="mb-75">semester:</h5>
                                    <p class="card-text"> - </p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75">Tanggal lahir:</h5>
                                    <p class="card-text">-</p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75">Email:</h5>
                                    <p class="card-text">-</p>
                                </div>

                            </div>
                        </div>
                        <!--/ about -->

                        <!-- suggestion pages -->
                        <div class="card">
                            <div class="card-body profile-suggestion">
                                <h5 class="mb-2">Rekomendasi Dosen Lain</h5>
                                <!-- user suggestions -->
                                <div class="d-flex justify-content-start align-items-center mb-1">
                                    <div class="avatar mr-1">
                                        <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar img"
                                            height="40" width="40" />
                                    </div>
                                    <div class="profile-user-info">
                                        <h6 class="mb-0">nama dosen</h6>
                                        <small class="text-muted">UNIVERSITAS</small>
                                    </div>
                                    <div class="profile-star ml-auto"><i data-feather="star" class="font-medium-3"></i>
                                    </div>
                                </div>
                                <!-- user suggestions -->

                                <!-- user suggestions -->
                                <div class="d-flex justify-content-start align-items-center mb-1">
                                    <div class="avatar mr-1">
                                        <img src="../../../app-assets/images/avatars/10-small.png" alt="avatar"
                                            height="40" width="40" />
                                    </div>
                                    <div class="profile-user-info">
                                        <h6 class="mb-0">nama dosen</h6>
                                        <small class="text-muted">UNIVERSITAS</small>
                                    </div>
                                    <div class="profile-star ml-auto"><i data-feather="star" class="font-medium-3"></i>
                                    </div>
                                </div>
                                <!-- user suggestions -->
                                <div class="d-flex justify-content-start align-items-center mb-1">
                                    <div class="avatar mr-1">
                                        <img src="../../../app-assets/images/avatars/3-small.png" alt="avatar img"
                                            height="40" width="40" />
                                    </div>
                                    <div class="profile-user-info">
                                        <h6 class="mb-0">nama dosen</h6>
                                        <small class="text-muted">UNIVERSITAS</small>
                                    </div>
                                    <div class="profile-star ml-auto"><i data-feather="star" class="font-medium-3"></i>
                                    </div>
                                </div>
                                <!-- user suggestions -->

                                <!-- user suggestions -->

                            </div>
                        </div>
                        <!--/ suggestion pages -->

                        <!-- twitter feed card -->
                        <div class="card">
                            <div class="card-body">
                                <h5>Riwayat Konseling</h5>
                                <!-- twitter feed -->
                                <div class="profile-twitter-feed mt-1">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-1">
                                            <img src="../../../app-assets/images/avatars/5-small.png" alt="avatar img"
                                                height="40" width="40" />
                                        </div>
                                        <div class="profile-user-info">
                                            <h6 class="mb-0">Gertrude Stevens</h6>
                                            <a href="javascript:void(0)">
                                                <small class="text-muted">UNIVERSITAS</small>
                                                <i data-feather="check-circle"></i>
                                            </a>
                                        </div>
                                        <div class="profile-star ml-auto">

                                        </div>
                                    </div>
                                    <p class="card-text mb-50">Catatan Konseling</p>
                                    <a href="javascript:void(0)">

                                    </a>
                                </div>
                                <!-- twitter feed -->
                                <div class="profile-twitter-feed mt-2">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-1">
                                            <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar img"
                                                height="40" width="40" />
                                        </div>
                                        <div class="profile-user-info">
                                            <h6 class="mb-0">Lura Jones</h6>
                                            <a href="javascript:void(0)">
                                                <small class="text-muted">UNIVERSITAS</small>
                                                <i data-feather="check-circle"></i>
                                            </a>
                                        </div>
                                        <div class="profile-star ml-auto">

                                        </div>
                                    </div>
                                    <p class="card-text mb-50">Catatan Konseling</p>
                                    <a href="javascript:void(0)">

                                    </a>
                                </div>
                                <!-- twitter feed -->
                                <div class="profile-twitter-feed mt-2">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <div class="avatar mr-1">
                                            <img src="../../../app-assets/images/avatars/1-small.png" alt="avatar img"
                                                height="40" width="40" />
                                        </div>
                                        <div class="profile-user-info">
                                            <h6 class="mb-0">Norman Gross</h6>
                                            <a href="javascript:void(0)">
                                                <small class="text-muted">UNIVERSITAS</small>
                                                <i data-feather="check-circle"></i>
                                            </a>
                                        </div>
                                        <div class="profile-star ml-auto">

                                        </div>
                                    </div>
                                    <p class="card-text mb-50">Catatan Konseling</p>
                                    <a href="javascript:void(0)">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/ twitter feed card -->
                    </div>
                    <!--/ left profile info section -->




                    <!--/ right profile info section -->
                </div>

                <!-- reload button -->

                <!--/ reload button -->
            </section>
            <!--/ profile info section -->
        </div>

    </div>
</div>
</div>
<!-- END: Content-->


@endsection