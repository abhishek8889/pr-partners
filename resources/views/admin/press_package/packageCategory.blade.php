@extends('admin_layout/master')
@section('content')
<div class="nk-content ">
<div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Package Category</h4>
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
                                <label class="form-label" for="category_name">Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control category_name" id="category_name"
                                        name="category_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="button" class="btn btn-lg btn-primary save-packagecategory">Save Package Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false" id="table">
                <thead>
					<tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col">
                        <span class="tb-odr-id">ID</span>
                        <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                    </th>
                    <th class="nk-tb-col">
                        <span class="tb-odr-total">Name</span>
                    </th>
                    <th class="nk-tb-col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $x=1; @endphp
                @foreach($packageCategorys as $packageCategory)
                <tr class="tb-odr-item tr{{ $packageCategory->id ?? '' }}">
                    <td class="nk-tb-col">
                        <span class="tb-odr-id">#{{ $x++ ?? ''}}</span>
                        <span class="tb-odr-date">{{ $packageCategory->updated_at->format('j F, Y') ?? ''}}</span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-odr-total">
                            <input type="text" data-id="{{ $packageCategory->id ?? ''}}" old-name="{{$packageCategory->name ?? ''}}"
                                name="editname{{ $packageCategory->id ?? ''}}" class="form-control editname{{ $packageCategory->id ?? ''}}" disabled
                                value="{{ $packageCategory->name ?? ''}}">
                        </span>
                    </td>
                    <td class="nk-tb-col">
                        <div class="dropdown">
                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"
                                data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                <ul class="link-list-plain">
                                    <li><a class="text-primary edit" data-id="{{ $packageCategory->id ?? '' }}">Edit</a></li>
                                    <li><a class="text-danger remove" data-id="{{ $packageCategory->id ?? '' }}">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
              
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("body").delegate(".save-packagecategory", "click", function (e) {
            // $('.save-category').click( function (){
            var category_name = $('.category_name').val();
            // console.log(category_name);
            $.ajax({
                url: 'packagecategory-add',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': category_name,
                },
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function (data) {
                setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    $(':input').prop('checked', false).val('');
                    // console.warn(data);
                    NioApp.Toast(data, 'success', { position: 'top-right' });
                    $("#table").load(location.href + " #table");
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

      //  Remove function 
      $(document).ready(function () {
        $("body").delegate(".remove", "click", function (e) {
            // $('.remove').click( function (e){
            e.preventDefault();
            var remove_id = $(this).attr('data-id');
            $.ajax({
                url: 'packagecategory-add',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'remove_id': remove_id,
                },
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function (data) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    console.warn(data);
                    NioApp.Toast(data, 'success', { position: 'top-right' });
                    $('.tr'+remove_id).addClass('d-none').remove();
                    // $("#table").load(location.href + " #table");
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

     // Edit Script for table
     $(document).ready(function () {
            $("body").delegate(".edit", "click", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $('.editname' + id).removeAttr('disabled').focus();


            $('input[name^="editname"]').focusout(function () {
                $(this).attr('disabled', true);
                var edit_id = $(this).data('id');
                var name = $(this).val();
                $.ajax({
                    url: 'packagecategory-add',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'edit_id': edit_id,
                        'name': name
                    },
                    beforeSend: function() {
                $('.spinner-container').show();
                },
                    success: function (data) {
                        setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                        console.warn(data);
                        NioApp.Toast(data, 'success', { position: 'top-right' });
                        // $("#table").load(location.href + " #table");
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
                        // console.log(errors);
                        $('.editname' + edit_id).val($('.editname' + edit_id).attr('old-name'));
                    }
                });

            });
        });
    });

</script>
@endsection