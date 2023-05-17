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
                                        <input type="text" class="form-control genre_name" id="genre_name" name="genre_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-lg btn-primary save-genre">Save Genre</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Table content of genre start here -->
        <div class="card card-bordered card-preview mt-2">
                <table class="table table-orders" id="table">
                    <thead class="tb-odr-head">
                        <tr class="tb-odr-item">
                            <th class="tb-odr-info">
                                <span class="tb-odr-id">ID</span>
                                <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                            </th>
                            <th class="tb-odr-amount">
                                <span class="tb-odr-total">Name</span>
                            </th>
                            <th class="tb-odr-action">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tb-odr-body">
                        <?php $x = 0; ?>
                        @foreach($genre as $g)
                        <?php $x++; ?>
                        <tr class="tb-odr-item tr{{ $g->id ?? '' }}">
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">#{{ $x ?? ''}}</span>
                                <span class="tb-odr-date">{{ \Carbon\Carbon::parse($g->updated_at ?? '')->format('j F, Y') }}</span>
                            </td>
                            <td class="tb-odr-amount">
                                <span class="tb-odr-total">
                                    <!-- <span class="name">{{$g->name ?? ''}}</span> -->
                                    <input type="text" data-id="{{ $g->id ?? ''}}" old-name="{{$g->name ?? ''}}" name="editname{{ $g->id ?? ''}}" class="form-control editname{{ $g->id ?? ''}}" readonly value="{{$g->name ?? ''}}">
                                </span>
                            </td>
                            <td class="tb-odr-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a class="text-primary edit" data-id="{{ $g->id ?? '' }}">Edit</a></li>
                                            <li><a class="text-danger remove" data-id="{{ $g->id ?? '' }}">Remove</a></li>
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
<script>
    $(document).ready(function (){
        $("body").delegate(".save-genre","click",function(e){
        // $('.save-genre').click( function (){
        var genre_name = $('.genre_name').val();
        console.log(genre_name);
                $.ajax({
                    url: 'genre-add',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'name': genre_name,
                    },
                    success: function(data) {
                        // console.warn(data);
                        NioApp.Toast(data, 'success', {position: 'top-right'});
                        $("#table").load(location.href + " #table");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var errors = jqXHR.responseJSON.errors;
                        for (var fieldName in errors) {
                            if (errors.hasOwnProperty(fieldName)) {
                                var errorMessages = errors[fieldName];

                                errorMessages.forEach(function(errorMessage) {
                                    console.log(errorMessage);
                                    NioApp.Toast(errorMessage, 'error', {position: 'top-right'});
                                });
                            }
                        }
                    }



                });
    
        });
    });

    //  Remove function 
    $(document).ready(function (){
        $("body").delegate(".remove","click",function(e){
        // $('.remove').click( function (e){
            e.preventDefault();
            var remove_id = $(this).attr('data-id');
                $.ajax({
                    url: 'genre-add',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'remove_id': remove_id,
                    },
                    success: function(data) {
                        console.warn(data);
                        NioApp.Toast(data, 'success', {position: 'top-right'});
                        // $('.tr'+remove_id).addClass('d-none').remove();
                        $("#table").load(location.href + " #table");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var errors = jqXHR.responseJSON.errors;
                        for (var fieldName in errors) {
                            if (errors.hasOwnProperty(fieldName)) {
                                var errorMessages = errors[fieldName];

                                errorMessages.forEach(function(errorMessage) {
                                    console.log(errorMessage);
                                    NioApp.Toast(errorMessage, 'error', {position: 'top-right'});
                                });
                            }
                        }
                    }



                });
    
        });
    });

    // Edit Script for table
    $(document).ready(function (){
        $('.edit').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $('.editname' + id).removeAttr('readonly').focus();
            

            $('input[name^="editname"]').focusout(function() {
                $(this).attr('readonly', true);
                var edit_id = $(this).data('id');
                var name = $(this).val();
                $.ajax({
                    url: 'genre-add',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'edit_id': edit_id,
                        'name': name
                    },
                    success: function(data) {
                        console.warn(data);
                        NioApp.Toast(data, 'success', {position: 'top-right'});
                        // $("#table").load(location.href + " #table");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var errors = jqXHR.responseJSON.errors;
                        for (var fieldName in errors) {
                            if (errors.hasOwnProperty(fieldName)) {
                                var errorMessages = errors[fieldName];

                                errorMessages.forEach(function(errorMessage) {
                                    console.log(errorMessage);
                                    NioApp.Toast(errorMessage, 'error', {position: 'top-right'});
                                });
                            }
                        }
                        $('.editname'+edit_id).val($('.editname'+edit_id).attr('old-name'));
                    }
                });
    
        });
    });
    });
</script>
@endsection
