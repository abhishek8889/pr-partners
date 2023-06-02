@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
<div class="nk-block-head d-flex justify-content-between">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Data Upload Using CSV</h4>
                <div class="nk-block-des">
                    <p>You can upload data by upload CSV file .</p>
                </div>
            </div>
            <div class="nk-block-des text-soft">
                {{ Breadcrumbs::render('Csv-upload') }}
         </div>
        </div>
<div class="card card-bordered">
        <div class="card-inner">
            <div class="form-group">
                <label class="form-label" for="customFileLabel">Default File Upload</label>
                <form id="csvuploadform" action="{{ route('upload-csv-procc') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-control-wrap">
                    <div class="form-file">
                        <input type="file" class="form-file-input" id="customFile" name="file">
                        <label class="form-file-label" id="customFilelabel" for="customFile">Choose file</label>
                    </div>
                    @error('file')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control-wrap mt-2">
                    <div class="form-file">
                       <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#csvuploadform').on('submit',function(e){
            e.preventDefault();
            formdata = new FormData(this);
            $.ajax({
                method: 'post',
                url: '{{route('upload-csv-procc')}}',
                data: formdata,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response) {
                    $('.spinner-container').hide();
                    $('#customFile').val(null);
                    $('#customFilelabel').html('');
                if(response.success){
                    toastr.clear();
                    NioApp.Toast(response.success, 'info', {position: 'top-right'});
                }else{
                    toastr.clear();
                    NioApp.Toast(response.error, 'error', {position: 'top-right'});
                }
                }
        });
    });
});
</script>
@endsection