@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Package Bundel List</h4>
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
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Bundel Price</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Retail Price</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Publication</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @php $z=1; @endphp
                @for ($i = 0; $i < count($packageBundles); $i++)
                      
                    <tr class="tb-odr-item tr{{ $packageBundles[$i]['id'] ?? ''}}">
                        <td class="nk-tb-col">
                            <span class="tb-odr-id">{{ $z++ ?? ''}}</span>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-info">
                                  <span class="tb-lead">{{ $packageBundles[$i]['title'] ?? ''}}<span class="dot dot-success d-md-none ms-1"></span></span>
                                </div>
                            </div>
                        </td>

                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">{{ $packageBundles[$i]['bundle_price'] ?? ''}}<span class="currency"><b> $</b></span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-amount">{{ $packageBundles[$i]['retail_price'] ?? ''}}<span class="currency"><b> $</b></span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-lead">{{ $packageBundles[$i]['category']['name'] ?? ''}}</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="list-status">
                                <?php
                                $genreIds = explode(',', $packageBundles[$i]['publication_id']);
                                $items = str_replace(['[', '"', ']'], '', $genreIds);
                                $publications = App\Models\Publication::with('article_type','region')->whereIn('id', $items)->get()->toArray();
                                // echo '<pre>';
                                // print_r($genreNames);
                                // echo '</pre>';
                                // die();
                                ?>
                        <!-- Modal Trigger Code -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault{{ $packageBundles[$i]['id'] ?? ''}}">View Publications</button>

                               
                                    <!-- Modal Content Code -->
                                    <div class="modal fade" tabindex="-1" id="modalDefault{{ $packageBundles[$i]['id'] ?? ''}}" style="--bs-modal-width: 1111px !important;">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Select Publications</h5>
                                                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <em class="icon ni ni-cross"></em>
                                                </a>
                                            </div>
                                                <div class="card card-bordered card-preview tablecard">
                                                   
                                                    <div class="card-inner">
                                                        <table class="datatable-inits nowrap nk-tb-list nk-tb-ulist " data-auto-responsive="true">
                                                            <thead>
                                                            
                                                                <tr class="nk-tb-item nk-tb-head">
                                                                    <!-- <th class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                            <input type="checkbox" class="custom-control-input" id="uid">
                                                                            <label class="custom-control-label" for="uid"></label>
                                                                        </div>
                                                                    </th> -->
                                                                    <th class="nk-tb-col"><span class="sub-text">Publication</span></th>
                                                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Domain Authority</span></th>
                                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">TAT</span></th>
                                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Genre</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Article type</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Country / Region</span></th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            @for ($p = 0; $p < count($publications); $p++)
                                                                
                                                                <tr class="nk-tb-item">
                                                                    <!-- <td class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext ">
                                                                            <input  type="checkbox" class="custom-control-input publication_id" id="{{ $publications[$p]['id'] ?? ''}}" name="publication_id[]" value="{{ $publications[$p]['id'] ?? ''}}">
                                                                            <label class="custom-control-label" for="{{ $publications[$p]['id'] ?? ''}}"></label>
                                                                        </div>
                                                                    </td> -->
                                                                    <td class="nk-tb-col">
                                                                        <div class="user-card">
                                                                            <div class="user-info">
                                                                            <a href="{{ $publications[$p]['url'] ?? ''}}">  <span class="tb-lead">{{ $publications[$p]['title'] ?? ''}}<span class="dot dot-success d-md-none ms-1"></span></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                        <span class="tb-amount">{{ $publications[$p]['price'] ?? ''}}<span class="currency"><b> $</b></span></span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-md">
                                                                        <span>{{ $publications[$p]['domain_authority'] ?? ''}}</span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-lg">
                                                                        <ul class="list-status">
                                                                            <li><span>{{ $publications[$p]['tat'] ?? ''}}</span></li>
                                                                        </ul>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-lg">
                                                                        <ul class="list-status">
                                                                            <?php
                                                                            $genreIds = explode(',', $publications[$p]['genre']);
                                                                            $items = str_replace(['[', '"', ']'], '', $genreIds);
                                                                            $genreNames = App\Models\Genre::whereIn('id', $items)->pluck('name')->toArray();
                                                                            ?>

                                                                            <li> <span>
                                                                            @for ($x = 0; $x < count($genreNames); $x++)
                                                                                {{ $genreNames[$x] ?? ''}} /
                                                                                <!-- <br> -->
                                                                                @if($x % 2 == 0)
                                                                                    <br>
                                                                                @endif
                                                                            @endfor
                                                                            </span></li>
                                                                        </ul>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-lg">
                                                                        <span>{{ $publications[$p]['article_type']['type'] ?? ''}}</span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-md">
                                                                        <span class="tb-status text-successs">{{ $publications[$p]['region']['country_name'] ?? ''}}</span>
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
                                            <li><a href="{{ url('admin-dashboard/press-package-update') }}/{{ $packageBundles[$i]['id'] ?? '' }}" data-id="{{ $packageBundles[$i]['id'] ?? '' }}" id="edit" class="text-primary">Edit</a></li>
                                            <li><a data-id="{{ $packageBundles[$i]['id'] ?? '' }}" id="remove" class="text-danger remove">Remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                    </tr><!-- .nk-tb-item  --> 
                    @endfor
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
            url: 'remove-PackageBundle',
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