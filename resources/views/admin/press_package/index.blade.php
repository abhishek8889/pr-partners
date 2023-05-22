@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Insert Publications</h4>
            <div class="nk-block-des">
                <p>You can insert your publications here.</p>
            </div>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Package Bundel</h5>
            </div>
            <form action="" id="publication_form" methos="post"class="gy-3">
                @csrf
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name">Title</label>
                            <span class="form-note">Specify the title of your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="title" name="title" value="" placeholder="Enter title here"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Price</label>
                            <span class="form-note">Specify the price of your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="number" min="1" class="form-control" id="price" name="price" value="" placeholder="Enter price here">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Retail Price</label>
                            <span class="form-note">Specify the Retail price of your Package Bundel.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="number" min="1" class="form-control" id="retail_price" name="retail_price" value="" placeholder="Enter Your Retail Price">
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <span class="form-note">Please select the Category for your Package Bundel.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <ul class="custom-control-group g-3 align-center">
                            @if($packageCategorys != '')
                                @foreach($packageCategorys as $packageCategory)
                               
                                <li>
                                    <div class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" class="custom-control-input" id="{{ $packageCategory['name'] }}" name="packageCategory" value="{{ $packageCategory['id'] }}">
                                        <label class="custom-control-label" for="{{ $packageCategory['name'] }}">{{ $packageCategory['name'] }}</label>
                                    </div>
                                </li>
                               
                                @endforeach
                                @endif
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Publication</label>
                            <span class="form-note">Please select the Publications for your Package Bundel.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <ul class="custom-control-group g-3 align-center">
                                <!-- Modal Trigger Code -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault">Select Publication</button>

                                    <!-- Modal Content Code -->
                                    <div class="modal fade" tabindex="-1" id="modalDefault">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="card card-bordered card-preview tablecard">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Select Publications</h5>
                                                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                    </div>
                                                    <div class="card-inner">
                                                        <!-- datatable-init and s here  -->
                                                        <table class="datatable-inits nowrap nk-tb-list nk-tb-ulist " data-auto-responsive="true">
                                                            <thead>
                                                            
                                                                <tr class="nk-tb-item nk-tb-head">
                                                                    <th class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                            <input type="checkbox" class="custom-control-input" id="uid">
                                                                            <label class="custom-control-label" for="uid"></label>
                                                                        </div>
                                                                    </th>
                                                                    <th class="nk-tb-col"><span class="sub-text">Publication</span></th>
                                                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Domain Authority</span></th>
                                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">TAT</span></th>
                                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Genre</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Article type</span></th>
                                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Country / Region</span></th>
                                                                    <!-- <th class="nk-tb-col nk-tb-col-tools text-end">
                                                                        Action
                                                                    </th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            @for ($i = 0; $i < count($publications); $i++)
                                                                
                                                                <tr class="nk-tb-item">
                                                                    <td class="nk-tb-col nk-tb-col-check">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext ">
                                                                            <!--onclick="test()" <input type="checkbox" name="publication_id[]" class="custom-control-input" id="checkbox{{ $publications[$i]['id'] ?? ''}}" value="{{ $publications[$i]['id'] ?? ''}}"> -->
                                                                            <input  type="checkbox" class="custom-control-input publication_id" id="{{ $publications[$i]['id'] ?? ''}}" name="publication_id[]" value="{{ $publications[$i]['id'] ?? ''}}">
                                                                            <label class="custom-control-label" for="{{ $publications[$i]['id'] ?? ''}}"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="user-card">
                                                                            <div class="user-info">
                                                                            <a href="{{ $publications[$i]['url'] ?? ''}}">  <span class="tb-lead">{{ $publications[$i]['title'] ?? ''}}<span class="dot dot-success d-md-none ms-1"></span></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                        <span class="tb-amount">{{ $publications[$i]['price'] ?? ''}}<span class="currency"><b> $</b></span></span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-md">
                                                                        <span>{{ $publications[$i]['domain_authority'] ?? ''}}</span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-lg">
                                                                        <ul class="list-status">
                                                                            <li><span>{{ $publications[$i]['tat'] ?? ''}}</span></li>
                                                                        </ul>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-lg">
                                                                        <ul class="list-status">
                                                                            <?php
                                                                            $genreIds = explode(',', $publications[$i]['genre']);
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
                                                                        <span>{{ $publications[$i]['article_type']['type'] ?? ''}}</span>
                                                                    </td>
                                                                    <td class="nk-tb-col tb-col-md">
                                                                        <span class="tb-status text-successs">{{ $publications[$i]['region']['country_name'] ?? ''}}</span>
                                                                    </td>
                                                                    <!-- <td class="tb-odr-action">
                                                                        <div class="dropdown">
                                                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"
                                                                                data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                <ul class="link-list-plain">
                                                                                    <li><a class="text-primary edit" data-id="{{ $publications[$i]['id'] ?? '' }}">Edit</a></li>
                                                                                    <li><a class="text-danger remove" data-id="{{ $publications[$i]['id'] ?? '' }}">Remove</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </td> -->
                                                                </tr><!-- .nk-tb-item  --> 
                                                                @endfor
                                                            </tbody>
                                                        </table>
                                                    </div>
    </div>
                                            </div>
                                        </div>
                                    </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Add Package Bundel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- card -->
</div><!-- .nk-block -->
<script>
    // function test() {
    //     var values = $('input:checkbox:checked.publication_id').map(function () {
    //         return this.value;
    //     }).get();
    //     console.log(values);
    // }
    // $(document).ready(function (){
    //     let stories = document.querySelectorAll("[type='checkbox']");
    //     // console.log(stories);
    //     let favorites = [];
    //     function createFavorites() {
    //     favorites = [];
    //     let checked = document.querySelectorAll("[type='checkbox']:checked");
    //     checked.forEach(function(el) {
    //         favorites.push(el.value);
    //     });
    //     console.log(favorites);
    //     }
    //     stories.forEach(function(el) {
    //     el.addEventListener("change", function() {
    //         createFavorites();
    //     });
    //     });
    // });
    $(document).ready(function(){
        $('#publication_form').on('submit',function(e){
            e.preventDefault();            
            formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: 'addPackageBundle',
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
</script>
@endsection