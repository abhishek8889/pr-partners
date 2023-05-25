@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Update-Other Services</h4>
            <div class="nk-block-des">
                <p>You can insert your Services here.</p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update-{{ $service->title ?? ''}}</h5>
            </div>
            <form action="" id="service_form" methos="post"class="gy-3">
                @csrf
                <input type="hidden" value="{{ $service->id ?? ''}}" name="id">
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Service title</label>
                            <span class="form-note">Specify the title of your Services.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title ?? ''}}" placeholder="Enter title here"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Service features</label>
                            <span class="form-note">Please select the features for your Services.</span>
                        </div>
                    </div>
                    <?php $serviceList = json_decode($service->publication_id ?? '') ?>
                    <div class="col-lg-7">
                        @for ($s = 0; $s < count($serviceList); $s++)
                        <div id="row">
                            
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-danger" id="DeleteRow" type="button">
                                        <i class="bi bi-trash"></i>
                                        Delete
                                    </button>
                                </div>
                                <input type="text" class="form-control m-input" name="services[]" value="{{ $serviceList[$s] ?? ''}}"/>
                            </div>
                        </div>
                            @endfor


                        <div id="newinput"></div>
                        <button id="rowAdder" type="button" class="btn btn-dark">
                            <span class="bi bi-plus-square-dotted">
                            </span> ADD
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Update Service</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- card -->
</div><!-- .nk-block -->
<script type="text/javascript">
$("#rowAdder").click(function() {
    newRowAdd =
        '<div id="row"> <div class="input-group m-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control m-input" name="services[]"> </div> </div>';

    $('#newinput').append(newRowAdd);
});

$("body").on("click", "#DeleteRow", function() {
    $(this).parents("#row").remove();
})
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#service_form").submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);

        $.ajax({
            url: "/updateService",
            type: "POST",
            data: formData,
            success: function(data) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                }, 1000);
                console.warn(data);
                NioApp.Toast(data, 'success', {
                    position: 'top-right'
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                }, 1000);
                var errors = jqXHR.responseJSON.errors;
                for (var fieldName in errors) {
                    if (errors.hasOwnProperty(fieldName)) {
                        var errorMessages = errors[fieldName];

                        errorMessages.forEach(function(errorMessage) {
                            console.log(errorMessage);
                            NioApp.Toast(errorMessage, 'error', {
                                position: 'top-right'
                            });
                        });
                    }
                }
            }
        });

    });
});
</script>
<!-- 
<script>
    $(document).ready(function(){
        $('#service_form').on('submit',function(e){
            e.preventDefault();            
            formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: '/updateService',
                data: formdata,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function (data) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    // $(':input').prop('checked', false).val('');
                    console.warn(data);
                    NioApp.Toast(data, 'success', { position: 'top-right' });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    var errors = jqXHR.responseJSON.errors;
                    for (var fieldName in errors) {
                        if (errors.hasOwnProperty(fieldName)) {
                            var errorMessages = errors[fieldName];

                            errorMessages.forEach(function (errorMessage) {
                                console.log(errorMessage);
                                NioApp.Toast(errorMessage, 'error', { position: 'top-right' });
                            });
                        }
                    }
                }
            });
        });
    });
</script> -->
@endsection