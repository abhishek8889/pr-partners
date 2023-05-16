@extends('admin_layout/master')
@section('content')
<div class="nk-content ">
    <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Genre Upload</h4>
                    <div class="nk-block-des">
                        <p>You can alow display form in column as example below.</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="#">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="genre_name">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="genre_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save Genre</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection