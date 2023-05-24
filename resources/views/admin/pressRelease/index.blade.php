@extends('admin_layout/master')
@section('content')
<div class="nk-content ">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Press Release Upload</h4>
                <div class="nk-block-des">
                    <p>You can alow display form in column as example below.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="#" id="form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label" for="genre_name">Title</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control title" id="title" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="genre_name">Price</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control price" id="price" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary save">Save Press Release</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <!-- Table content of genre start here -->
    <div class="card card-bordered card-preview mt-3">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false" id="table">
                <thead>

                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col">
                            <span class="tb-odr-id">#</span>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($press_release as $release)

                    <tr class="nk-tb-item tr{{ $release->id ?? '' }}">
                        <td class="nk-tb-col">
                            <span class="tb-odr-id">{{$i++}}</span>
                        </td>

                        <td class="nk-tb-col">

                            <div class="user-card">
                                <div class="user-info">
                                    <span class="d-none">
                                    {{ $release->title ?? ''}}
                                    </span>
                                    <span class="tb-odr-total">
                                        <input type="text" data-id="{{ $release->id ?? ''}}"
                                            old-name="{{$release->title ?? ''}}" name="edittitle{{ $release->id ?? ''}}"
                                            class="form-control edittitle{{ $release->id ?? ''}}" disabled
                                            value="{{ $release->title ?? ''}}">
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-odr-total">
                                <input type="number" data-id="{{ $release->id ?? ''}}"
                                    old-name="{{$release->price ?? ''}}" name="editprice{{ $release->id ?? ''}}"
                                    class="form-control editprice{{ $release->id ?? ''}}" disabled
                                    value="{{ $release->price ?? ''}}">
                            </span>
                        </td>

                        <td class="tb-odr-action">
                            <div class="dropdown drop{{$release->id}}">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"
                                    data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a class="text-primary edit" data-id="{{ $release->id ?? '' }}">Edit</a>
                                        </li>
                                        <li><a class="text-danger remove" data-id="{{ $release->id ?? '' }}">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='d-none div{{$release->id}}'>
                                <button class="btn btn-success update{{$release->id}}">Save</button>
                            </div>
                        </td>
                    </tr><!-- .nk-tb-item  -->

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


</div>

<script>
$(document).ready(function() {
    $("body").delegate("#form-data", "submit", function(e) {
        // $('#form-data').on('submit',function(e){
        e.preventDefault();
        formdata = new FormData(this);
        $.ajax({
            method: 'post',
            url: '/addPressRelease',
            data: formdata,
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.spinner-container').show();
            },
            success: function(data) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                    NioApp.Toast(data, 'success', { position: 'top-right' });
                    location.reload();
                }, 2000);

                // setTimeout(function() {
                //     $('.spinner-container').hide();
                // }, 1000);
                // // console.warn(data);
                // // $('.title').val('');
                // // $('.price').val('');
                // // $(':input').prop('checked', false).val('');
                // NioApp.Toast(data, 'success', {
                //     position: 'top-right'
                // });
                // location.reload();
                // $("#table").load(location.href + " #table");
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



// Edit Script for table
$(document).ready(function() {
    $("body").delegate(".edit", "click", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $('.editprice' + id).removeAttr('disabled');
        $('.edittitle' + id).removeAttr('disabled').focus();
        // console.warn(id);
        $('.div' + id).removeClass('d-none');
        $('.drop' + id).addClass('d-none');

        $('.update' + id).click(function() {

            // $('input[name^="editname"]').change(function() {
            //     $(this).attr('disabled', true);
            var edit_id = id;
            var title = $('.edittitle' + id).val();
            var price = $('.editprice' + id).val();
            console.log(title, price);
            $.ajax({
                url: '/update-release',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'price': price,
                    'title': title,
                    'id': edit_id
                },
                beforeSend: function() {
                    $('.spinner-container').show();
                },
                success: function(data) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    //    console.warn(data);
                    NioApp.Toast(data, 'success', {
                        position: 'top-right'
                    });
                    $('.editprice' + edit_id).prop('disabled', true);
                    $('.edittitle' + edit_id).prop('disabled', true).focus();
                    $('.div' + edit_id).addClass('d-none');
                    $('.drop' + edit_id).removeClass('d-none');

                    // $("#table").load(location.href + " #table");
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
                    $("#table").load(location.href + " #table");
                }
            });

        });
    });
});


//  Remove function 
$(document).ready(function() {
    $("body").delegate(".remove", "click", function(e) {
        // $('.remove').click( function (e){
        e.preventDefault();
        var remove_id = $(this).attr('data-id');
        $.ajax({
            url: '/remove-release',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'remove_id': remove_id,
            },
            beforeSend: function() {
                $('.spinner-container').show();
            },
            success: function(data) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                }, 1000);
                console.warn(data);
                NioApp.Toast(data, 'success', {
                    position: 'top-right'
                });
                $('.tr' + remove_id).addClass('d-none').remove();
                // $("#table").load(location.href + " #table");
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
@endsection