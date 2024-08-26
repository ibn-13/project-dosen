@extends('layouts.master')
@section('content')



<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Status Payment</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="home"
                        role="tab" aria-selected="true">
                        <i data-feather="check-square"></i> Selesai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#profileIcon"
                        aria-controls="profile" role="tab" aria-selected="false">
                        <i data-feather="users"></i> Berjalan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#aboutIcon" aria-controls="about"
                        role="tab" aria-selected="false">
                        <i data-feather="external-link"></i> Gagal
                    </a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="homeIcon" role="tabpanel" aria-labelledby="homeIcon-tab">
                    <section id="homeIcon-datatable">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Selesai </h4>
                            </div>
                            <div class="card-datatable">
                                <table id="homeIconTable" class="dt-multilingual table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>universitas</th>
                                            <th>tanggal konseling</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="profileIcon" role="tabpanel" aria-labelledby="profileIcon-tab">
                    <section id="profileIcon-datatable">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Berjalan </h4>
                            </div>
                            <div class="card-datatable">
                                <table id="profileIconTable" class="dt-multilingual table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>universitas</th>
                                            <th>tanggal konseling</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="aboutIcon" role="tabpanel" aria-labelledby="aboutIcon-tab">
                    <section id="aboutIcon-datatable">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Gagal </h4>
                            </div>
                            <div class="card-datatable">
                                <table id="aboutIconTable" class="dt-multilingual table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>universitas</th>
                                            <th>tanggal konseling</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection