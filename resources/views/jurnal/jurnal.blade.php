@extends('layouts.master')
@section('content')



<div class="content-body">



    <section class="counter-textarea">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daily Journal</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-2">
                            cari tau jurnal anda saat bimbingan.

                        </p>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group mb-0">
                                    <textarea data-length="20" class="form-control char-textarea" id="textarea-counter"
                                        rows="3" placeholder="text"></textarea>

                                    <label for="textarea-counter">text </label>
                                </div>
                                <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 20
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload File</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        upload file bimbingan

                    </p>
                    <button id="select-files" class="btn btn-outline-primary mb-1">
                        <i data-feather="file"></i> Click me to select files
                    </button>
                    <form action="#" class="dropzone dropzone-area" id="dpz-btn-select-files">
                        <div class="dz-message">Drop files here or click button to upload.</div>
                    </form>
                </div>


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