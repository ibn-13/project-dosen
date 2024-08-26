@extends('layouts.master')
@section('content')

<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>

    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- Medal Card -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>DosenKeren.ID</h5>
                        </div>
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
                                                <a class="carousel-control-prev" href="#carouselExampleFade"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleFade"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="card card-congratulation-medal">
                    <div class="card-body">

                        <p class="card-text font-small-3">kami hadir untuk membantu mahasiswa seperti anda meraih
                            dan mewujudkan cita-cita di
                            DosenKeren, anda tidak sendiri. Disini dosen lebih dari sekedar dosen, kami hadir
                            sebagai sahabat dan mentor yang siap membimbing anda menuju kesuksesan.</p>
                    </div>
                </div>
                </>
                <div class=" col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Jadwal Konseling Anda</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon"
                                        aria-controls="home" role="tab" aria-selected="true">
                                        <i data-feather="check-square"></i> selesai
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#profileIcon"
                                        aria-controls="profile" role="tab" aria-selected="false">
                                        <i data-feather="users"></i> berjalan
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#aboutIcon"
                                        aria-controls="about" role="tab" aria-selected="false">
                                        <i data-feather="external-link"></i> akan datang
                                    </a>
                                </li>
                            </ul>


                            <!-- Section moved here -->
                            <section id="complex-header-datatable">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="card-datatable">
                                                <table class="dt-complex-header table table-bordered table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Name</th>
                                                            <th colspan="2">waktu</th>
                                                            <th colspan="2">nama univ</th>
                                                            <th rowspan="2">Action</th>
                                                        </tr>
                                                        <tr>
                                                            <th>mulai</th>
                                                            <th>selesai</th>
                                                            <th>univ</th>
                                                            <th class="cell-fit">status</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>


                    </div>
                </div>
        </section>
        <!-- Nav Pills Themes Ends -->


        <!-- Earnings Card -->
        <div class="col-12">
            <div class="card earnings-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="card-title mb-1">Kalender</h4>
                            <div id="date-display" class="date-display"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateDisplay = document.getElementById('date-display');
            const today = new Date();

            const day = today.getDate().toString().padStart(2, '0');
            const month = (today.getMonth() + 1).toString().padStart(2, '0'); // Months are 0-indexed
            const year = today.getFullYear();

            dateDisplay.textContent = `${day}-${month}-${year}`;
        });
        </script>


        <style>
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
        }

        .calendar-day {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
            border-radius: 5px;
        }

        .calendar-day:hover {
            background-color: #e9ecef;
            cursor: pointer;
        }
        </style>




        <div class=" col-12">
            <div class="card earnings-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title mb-1">Quote in the day</h4>
                            <div class="font-small-2"> in the day</div>

                            <p class="card-text text-muted font-small-2">
                                <span class="font-weight-bolder">-></span><span> quote in the day</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/ Earnings Card -->
    </div>
</div>

<!-- Revenue Report Card -->
<div class="row" id="table-head">
    <div class="col-12">
        <div class="card">



            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Universitas</th>
                            <th>Alamat</th>
                            <th>JumlaH Dosen</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20"
                                    width="20" alt="Angular" />
                                <span class="font-weight-bold">Angular Univerity</span>
                            </td>
                            <td>alamat</td>
                            <td>200 dosen</td>
                            <td><span class="badge badge-pill badge-light-primary mr-1">Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                        data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="message-circle" class="mr-50"></i>
                                            <span>chat</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="calendar" class="mr-50"></i>
                                            <span>jadwal</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/react.svg" class="mr-75" height="20"
                                    width="20" alt="React" />
                                <span class="font-weight-bold">React Univerity</span>
                            </td>
                            <td>alamat</td>
                            <td>200 dosen</td>

                            </td>
                            <td><span class="badge badge-pill badge-light-primary mr-1">Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                        data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="message-circle" class="mr-50"></i>
                                            <span>chat</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="calendar" class="mr-50"></i>
                                            <span>jadwal</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/vuejs.svg" class="mr-75" height="20"
                                    width="20" alt="Vuejs" />
                                <span class="font-weight-bold">Vuejs Univerity</span>
                            </td>
                            <td>alamat</td>
                            <td>200 dosen</td>

                            </td>
                            <td><span class="badge badge-pill badge-light-warning mr-1">non active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                        data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="message-circle" class="mr-50"></i>
                                            <span>chat</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="calendar" class="mr-50"></i>
                                            <span>jadwal</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../../app-assets/images/icons/bootstrap.svg" class="mr-75" height="20"
                                    width="20" alt="Bootstrap" />
                                <span class="font-weight-bold">Bootstrap Univerity</span>
                            </td>
                            <td>alamat</td>
                            <td>200 dosen</td>

                            </td>
                            <td><span class="badge badge-pill badge-light-warning mr-1">non active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                        data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="message-circle" class="mr-50"></i>
                                            <span>chat</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i data-feather="calendar" class="mr-50"></i>
                                            <span>jadwal</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<!--/ Developer Meetup Card -->

<!-- Browser States Card -->

<!--/ Browser States Card -->

<!-- Goal Overview Card -->

<!--/ Goal Overview Card -->

<!-- Transaction Card -->
<div class="col-12">
    <div class="card card-transaction">

        <div class="card-header">
            <h4 class="card-title">payment method</h4>

        </div>

        <div class="card-body">
            <div class="transaction-item">
                <div class="media">
                    <div class="avatar bg-light-primary rounded">
                        <div class="avatar-content">
                            <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="transaction-title">E-Wallet</h6>
                        <small>e-wallet</small>
                    </div>
                </div>
            </div>
            <div class="transaction-item">
                <div class="media">
                    <div class="avatar bg-light-warning rounded">
                        <div class="avatar-content">
                            <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="transaction-title">Virtual Account</h6>
                        <small>Virtual Account</small>
                    </div>
                </div>
            </div>
            <div class="transaction-item">
                <div class="media">
                    <div class="avatar bg-light-info rounded">
                        <div class="avatar-content">
                            <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="transaction-title">Transfer Bank</h6>
                        <small>Transfer Bank</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Transaction Card -->
</div>
</section>
<!-- Dashboard Ecommerce ends -->

</div>
</div>



@endsection