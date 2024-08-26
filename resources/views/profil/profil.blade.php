@extends('layouts.master')
@section('content')

<!-- END: Main Menu-->

<!-- BEGIN: Content-->

<!-- END: Main Menu-->

<!-- BEGIN: Content-->

<div class="content-overlay"></div>

<div class="content-wrapper container-xxl p-0">
    <section id="basic-alerts">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <div class="demo-spacing-0">
                            <div class="alert alert-primary" role="alert">
                                <div class="alert-body"> wajib kamu isi sebelum konseling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-body">
        <!-- account setting page -->
        <section id="page-account-settings">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <ul class="nav nav-pills flex-column nav-left">
                        <!-- general -->
                        <li class="nav-item">
                            <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                                href="#account-vertical-general" aria-expanded="true">
                                <i data-feather="user" class="font-medium-3 mr-1"></i>
                                <span class="font-weight-bold">lengkapi data</span>
                            </a>
                        </li>
                        <!-- change password -->

                        <!-- information -->
                        <li class="nav-item">
                            <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                                aria-expanded="false">
                                <i data-feather="file-text" class="font-medium-3 mr-1"></i>
                                <span class="font-weight-bold">berkas catatan</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!--/ left menu section -->

                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- general tab -->
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <!-- header media -->
                                    <div class="media">
                                        <a href="javascript:void(0);" class="mr-25">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                id="account-upload-img" class="rounded mr-50" alt="profile image"
                                                height="80" width="80" />
                                        </a>
                                        <!-- upload and reset button -->

                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header media -->

                                    <!-- form -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Data Diri</h4>
                                            </div>
                                            <div class="card-body">
                                                <form id="jquery-val-form" method="post">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-default-name">Nama</label>
                                                        <input type="text" class="form-control" id="basic-default-name"
                                                            name="basic-default-name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="basic-default-name">Universitas</label>
                                                        <input type="text" class="form-control" id="basic-default-name"
                                                            name="basic-default-name" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="basic-default-name">Fakultas</label>
                                                        <input type="text" class="form-control" id="basic-default-name"
                                                            name="basic-default-name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Profile pic</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile"
                                                                name="customFile" />
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                profile pic</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="d-block">Gender</label>
                                                        <div class="custom-control custom-radio my-50">
                                                            <input type="radio" id="validationRadiojq1"
                                                                name="validationRadiojq" class="custom-control-input" />
                                                            <label class="custom-control-label"
                                                                for="validationRadiojq1">Laki-Laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="validationRadiojq2"
                                                                name="validationRadiojq" class="custom-control-input" />
                                                            <label class="custom-control-label"
                                                                for="validationRadiojq2">Perempuan</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="account-birth-date">Tanggal Lahir</label>
                                                        <input type="text" class="form-control flatpickr"
                                                            id="account-birth-date" name="dob" />
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="account-phone">NO HP</label>
                                                        <input type="text" class="form-control" id="account-phone"
                                                            name="phone" />
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="d-block" for="validationBio">Bio</label>
                                                        <textarea class="form-control" id="validationBio"
                                                            name="validationBiojq" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="validationCheck" name="validationCheck" />
                                                            <label class="custom-control-label"
                                                                for="validationCheck">Agree to our terms and
                                                                conditions</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary" name="submit"
                                                                value="Submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ form -->
                                </div>
                                <!--/ general tab -->



                                <!-- information -->
                                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                    aria-labelledby="account-pill-info" aria-expanded="false">
                                    <!-- form -->
                                    <form class="validate-form">



                                        <section id="card-text-alignment">
                                            <h5 class="mt-3 mb-2">Berkas Catatan</h5>


                                            <div class="col-12">
                                                <div class="card text-center mb-3">
                                                    <div class="card-body">
                                                        <h4 class="card-title">catatan mode harian ini</h4>
                                                        <p class="card-text">catatan peningkatan performa pertemuan
                                                        </p>
                                                        <a href="{{route('harian')}}"
                                                            class="btn btn-outline-primary">Catatan</a>
                                                    </div>
                                                </div>


                                                <div class="card text-center mb-3">
                                                    <div class="card-body">
                                                        <h4 class="card-title">daily journal</h4>
                                                        <p class="card-text">catatan peningkatan performa pertemuan
                                                        </p>
                                                        <a href="{{route('jurnal')}}"
                                                            class=" btn btn-outline-primary">Catatan</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
        </section>



    </div>
</div>
</div>
</div>
</div>
</section>
</div>
</form>
<!--/ form -->
</div>
<!--/ information -->







@endsection