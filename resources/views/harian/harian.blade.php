@extends('layouts.master')
@section('content')



<div class="content-body">



    <section class="counter-textarea">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">catatan mode harian</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row pb-50">

                    <div
                        class="col-sm-6 col-12 d-flex justify-content-between flex-column text-right order-sm-2 order-1">
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 7 Days
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                        <div id="avg-sessions-chart"></div>
                    </div>
                </div>
                <hr />
                <div class="row avg-sessions pt-50">
                    <div class="col-6 mb-2">
                        <p class="mb-50">akademik</p>
                        <div class="progress progress-bar-primary" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50"
                                aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <p class="mb-50">sosial</p>
                        <div class="progress progress-bar-warning" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60"
                                aria-valuemax="100" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="mb-50">kesehatan mental</p>
                        <div class="progress progress-bar-danger" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70"
                                aria-valuemax="100" style="width: 70%"></div>
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="mb-50">keuangan</p>
                        <div class="progress progress-bar-success" style="height: 6px">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90"
                                aria-valuemax="100" style="width: 90%"></div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-2">
                            <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                            <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>






    <nav aria-label="Page navigation example">
        <ul class="pagination mt-2">
            <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="javascript:void(0);">4</a>
            </li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
            <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
        </ul>
    </nav>
</div>
</div>
</>
<div class="card-body">
    <p class="card-text mb-2">
        catat kegiatan hari ini.

    </p>
    <div class="row">
        <div class="col-12">
            <div class="form-label-group mb-0">
                <textarea data-length="20" class="form-control char-textarea" id="textarea-counter" rows="3"
                    placeholder="text"></textarea>

                <label for="textarea-counter">text </label>
            </div>
            <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 20
            </small>
        </div>
    </div>
</div>

</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary mt-2 mr-1">Save
        changes</button>
    <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
</div>

@endsection