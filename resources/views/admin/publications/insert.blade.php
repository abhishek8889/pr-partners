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
                <h5 class="card-title">Publication Form</h5>
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
                                <input type="text" class="form-control form-data" id="title" name="title" value="" placeholder="Enter title here"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Url</label>
                            <span class="form-note">Specify the url of your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-data" id="url" name="url" value="" placeholder="Enter url here"/>
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
                                <input type="text" class="form-control form-data" id="price" name="price" value="" placeholder="Enter price here">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Domain Authority</label>
                            <span class="form-note">Specify the domain authority of your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="number" min="1" class="form-control form-data" id="domain_authority" name="domain_authority" value="" placeholder="Enter number of domain authority">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">TAT (Turn Around Time)<span> (in weeks)</span></label>
                            <span class="form-note">Specify the turn around time of your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="number"  min="1" class="form-control form-data" id="turn_around_time" value="" name="turn_around_time" placeholder="Enter turn around time">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Genres</label>
                            <span class="form-note">Please select the genre for your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <ul class="custom-control-group g-3 align-center">
                            @if($genre_list != '')
                                @foreach($genre_list as $genre)
                               
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{ $genre['name'] }}" name="genre_list[]" value="{{ $genre['id'] }}">
                                        <label class="custom-control-label" for="{{ $genre['name'] }}">{{ $genre['name'] }}</label>
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
                            <label class="form-label">Article Type</label>
                            <span class="form-note">Please select the article type for your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <ul class="custom-control-group g-3 align-center">
                            @if($article_types != '')
                                @foreach($article_types as $article)
                               
                                <li>
                                    <div class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" class="custom-control-input" id="{{ $article['type'] }}" name="article_type" value="{{ $article['id'] }}">
                                        <label class="custom-control-label" for="{{ $article['type'] }}">{{ $article['type'] }}</label>
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
                            <label class="form-label">Country/Region</label>
                            <span class="form-note">Please select the countryor region for your publication.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                        <ul class="custom-control-group g-3 align-center">
                            @if($region_list != '')
                                @foreach($region_list as $region)
                               
                                <li>
                                    <div class="custom-control custom-control-sm custom-radio">
                                        <input type="radio" class="custom-control-input" id="{{ $region['country_name'] }}" name="country_name" value="{{ $region['id'] }}">
                                        <label class="custom-control-label" for="{{ $region['country_name'] }}">{{ $region['country_name'] }}</label>
                                    </div>
                                </li>
                               
                                @endforeach
                                @endif
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Add Publication</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- card -->
</div><!-- .nk-block -->
<script>
    $(document).ready(function(){
        $('#publication_form').on('submit',function(e){
            e.preventDefault();
            formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: 'addPublication',
                data: formdata,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function (data) {
                    console.warn(data);
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    $('.form-data').val('');
                    $('.custom-control-input').prop('checked', false);
                  
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
