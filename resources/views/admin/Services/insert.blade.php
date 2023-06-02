@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head d-flex justify-content-between">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Other Services</h4>
            <div class="nk-block-des">
                <p>You can insert your Services here.</p>
            </div>
        </div>
        <div class="nk-block-des text-soft">
                {{ Breadcrumbs::render('Service-insert') }}
         </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Other Services</h5>
            </div>
            <form action="" id="service_form" methos="post" class="gy-3">
                @csrf
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Service Title</label>
                            <span class="form-note">Specify the title of your Services.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="title" name="title" value=""
                                    placeholder="Enter title here" />
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
                    <div class="col-lg-7">
                        <div id="row">
                            <div class="input-group my-2">
                                <div class="input-group-prepend">
                                    <button class="btn btn-danger" id="DeleteRow" type="button">
                                        <i class="bi bi-trash"></i>
                                        
                                    </button>
                                </div>
                                <input type="text" class="form-control m-input" name="services[]" />
                            </div>
                        </div>

                        <div id="newinput"></div>
                        <button id="rowAdder" type="button" class="btn btn-dark">
                            <span class="bi bi-plus-square-dotted">
                            </span> ADD
                        </button>
                    </div>
                    <!-- </div> -->
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Add Service</button>
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
        '<div id="row"> <div class="input-group my-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow" type="button">' +
        '<i class="bi bi-trash"></i></button> </div>' +
        '<input type="text" class="form-control m-input" name="services[]"> </div> </div>';

    $('#newinput').append(newRowAdd);
});

$("body").on("click", "#DeleteRow", function() {
    $(this).parents("#row").remove();
})
</script>
<script>
$(document).ready(function() {
    $('.publication_id').change(function() {
        const checkbox = $(this);
        const checkboxName = checkbox.data('name');
        const checkboxDiv = $('.checkboxName');

        if (checkbox.is(':checked')) {
            const newLabel = $('<span>', {
                'class': 'publisherTag',
                'data-name': checkboxName,
                'text': checkboxName
            }).append($('<span>', {
                'class': 'remove-chekbox',
                'text': 'x',
                'click': function() {
                    checkbox.prop('checked', false);
                    $(this).parent().remove();
                }
            }));
            checkboxDiv.append(newLabel);
        } else {
            checkboxDiv.find(`span[data-name="${checkboxName}"]`).remove();
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#service_form").submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize();
        console.log(formData);

        $.ajax({
            url: "addService",
            type: "POST",
            data: formData,
            success: function(data) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                }, 1000);
                // $(':input').prop('checked', false).val('');
                $('.form-control').val('');
                $('#newinput').html('');
                // $('.custom-control-input').prop('checked', false);
                // $('.checkboxName').html('');
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

<!-- <script>
    $(document).ready(function(){
        $('#service_form').on('submit',function(e){
            e.preventDefault();            
            formdata = new FormData(this);
            console.log(formdata);
                $.ajax({
                method: 'post',
                url: 'addService',
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
                    $('.form-control').val('');
                    $('.custom-control-input').prop('checked', false);
                    $('.checkboxName').html('');
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