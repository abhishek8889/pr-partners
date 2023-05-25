@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Other Services List</h4>
            <div class="nk-block-des">
                <p><code class="code-class"></code> </p>
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
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Service View</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <?php $i = 1 ?>
                <tbody>
               
                @foreach ($services as  $service)
                 
                    <tr class="tb-odr-item tr{{$service->id ?? ''}}">
                        <td class="nk-tb-col">
                            <span class="tb-odr-id">{{$i++}}</span>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-info">
                                  <span class="tb-lead">{{ $service->title ?? ''}}<span class="dot dot-success d-md-none ms-1"></span></span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="list-status">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault{{ $service->id ?? ''}}">View Service List</button>

                               
                                    <!-- Modal Content Code -->
                                    <div class="modal fade" tabindex="-1" id="modalDefault{{ $service->id ?? ''}}" style="--bs-modal-width: 1111px !important;">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                    <h5 class="modal-title">View Services</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                            </div>
                                                <div class="card card-bordered card-preview tablecard">
                                                    <div class="card-inner">
                                                        <table class="datatable-inits nowrap nk-tb-list nk-tb-ulist " data-auto-responsive="true">
                                                            <thead>
                                                                <tr class="nk-tb-item nk-tb-head">
                                                                    <th class="nk-tb-col"><span class="sub-text"><b>S.No</b></span></th>
                                                                
                                                                    <th class="nk-tb-col"><span class="sub-text"><b>Services list</b></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $servicesList =  json_decode($service->publication_id); $z = 1; ?>
                                                            @for ($p = 0; $p < count($servicesList); $p++)
                                                           
                                                                <tr class="nk-tb-item">
                                                                <td class="nk-tb-col tb-col-lg">
                                                                        <span>{{ $z++ ?? ''}}</span>
                                                                </td> 
                                                                <td class="nk-tb-col tb-col-lg">
                                                                        <span>{{ $servicesList[$p] ?? ''}}</span>
                                                                </td>

                                                                </tr><!-- .nk-tb-item  --> 
                                                            @endfor
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="modal-footer bg-light">
                                                    <a href="#" class="btn btn-lg btn-mw btn-primary" data-bs-dismiss="modal">Done</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </ul>
                        </td>
                        
                        <td class="tb-odr-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a href="{{ url('admin-dashboard/services-update') }}/{{ $service->id ?? '' }}" data-id="{{ $service->id ?? '' }}" id="edit" class="text-primary">Edit</a></li>
                                            <li><a data-id="{{ $service->id ?? '' }}" id="remove" class="text-danger remove">Remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                        </td>
                    </tr><!-- .nk-tb-item  --> 
                       
                @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div>
<script>

//  Remove function 
$(document).ready(function() {
    $("body").delegate(".remove", "click", function(e) {
        // $('.remove').click( function (e){
        e.preventDefault();
        var remove_id = $(this).attr('data-id');
        $.ajax({
            url: 'remove-service',
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
                $('.tr'+remove_id).addClass('d-none').remove();
                var rowCount = 1;
                    $('tbody tr.tb-odr-item:visible').each(function() {
                        $(this).find('.tb-odr-id').text(rowCount);
                        rowCount++;
                    });
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