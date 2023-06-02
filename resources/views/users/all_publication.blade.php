@extends('user_layout.master')
@section('content')
  <section class="publication_wrapper p-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="pricing_content">
            <div class="pricing_text">
              <h2>Pricing Sheet (PR-Partners)</h2>
              <p>
                Once we have published the article for you, any further edits may include an extra charge.
              </p>
            </div>
            <div class="ques_btn">
              <a class="btn" href="javascript:void(0)" role="button">Download PR Questionnaire</a>
            </div>
          </div>

          <div class="tab_btn">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Publication</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Press Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Press Release</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-services" aria-selected="false">Other Services</a>
              </li>
            </ul>
            <!-- Add reset and apply filter button here -->
            <div>
                <div class="ques_btn my-3">
                    <a id="reset_button" class="btn d-none" href="javascript:void(0)" role="button">Reset all filters</a>
               
                    <a id="apply_button" class="btn d-none" href="javascript:void(0)" role="button">Apply all filters</a>
                </div>
            </div>
            <!-- Reset filter and apply filter button end here ! -->
          </div>

          <div class="tab_wrapper">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="publication_content">
                  <div class="leftside_rang">
                    <form id="filterform">
                        @csrf
                      <div class="form-group">
                        <label for="publication_name">Publication name</label>
                        <input type="text" class="form-control " id="publication_name" name="publicationname" >
                      </div>
                      <div class="form-group">
                        <div class="form-group asc_wrapper">
                        <label for="sorted_filter">Sort by</label>
                          <select class="form-control" id="sorted_filter" name="sortedval">
                            <option value="asc">Price (Asc)</option>
                            <option value="dsc">Price (Dsc)</option>
                            <option value="tatasc">TAT (Asc)</option>
                            <option value="tatdsc">TAT (Dsc)</option>
                            <option value="daasc">DA (Asc)</option>
                            <option value="dadsc">DA (Dsc)</option>
                            <!-- <option>lorem ipsum</option>
                            <option>lorem ipsum</option> -->
                          </select>
                        </div>
                      </div>
                      
                      <div class="range_wreap">
                        <h3>Price range</h3>
                        <div id="slider-range"></div>
                        <div class="slider-labels">
                          <div class="caption">
                            <span id="slider-range-value1"></span>
                          </div>
                          <div class="text-right caption">
                            <span id="slider-range-value2"></span>
                          </div>
                        </div>
                        <div>
                          <input type="hidden" id="maxValue" value="{{ $priceRange ?? ''}}" data-max="{{ $priceRange ?? ''}}">
                          <input type="hidden" id="minValue" value="1" data-min="1">
                          <input type="hidden" name="minprice" value="1" class="min_value form-control">
                          <input type="hidden" name="maxprice" value="{{ $priceRange ?? ''}}" class="max_value form-control">
                        </div>
                      </div>
                      <div class="form-group wrapper">
                        <label for="region_filter">Select regions</label>
                            <select multiple data-placeholder="Select regions" id="region_filter" name="region_id[]">
                                @foreach($region_filter as $rf)  
                                <option value="{{ $rf->id }}" >{{ $rf->country_name ?? '' }}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="select_wreap">
                        <h3>Select genres</h3>
                        <div class="publication_list">
                        @foreach($genres_filter as $gf)
                          <label class="genrelabel" id="genere_label{{ $gf->id ?? '' }}" for="genere_filter{{ $gf->id ?? '' }}">{{ $gf->name ?? '' }}</label>
                          <input type="checkbox" class="generesfilter form-control" id="genere_filter{{ $gf->id ?? '' }}" name="genre_id[]" value="{{ $gf->id ?? '' }}" style="display:none;">
                        @endforeach
                        
                          
                        </div>
                      </div>
                      <div class="select_wreap">
                        <h3>Sponsored</h3>
                        <div class="publication_list">
                            <label for="">Yes</label>
                            <input type="hidden">
                            <label for="">No</label>
                            <input type="hidden">
                            <label for="">Discrete</label>
                            <input type="hidden">
                          <!-- <a href="javascript:void(0)">Yes</a>
                          <a href="javascript:void(0)">No</a>
                          <a href="javascript:void(0)">Discrete</a> -->
                        </div>
                      </div>
                      <hr>
                      <!-- <div class="ques_btn">
                        <a id="reset_button" class="btn" href="javascript:void(0)" role="button">Reset all filters</a>
                      </div> -->
                    </form>
                  </div>
                  <div class="rightside_publication">
                    <div class="publications_show">
                      <span>Showing <span class="showtotal">{{ count($publication_data) ?? ''}}</span>  of {{ count($publication_data) ?? ''}} publications</span>
                    </div>
                    <div class="overview_company">
                        <div class="spinner_wreap d-none"><div id="mySpinner" class="dots-bars-4"></div></div>
                      <table>
                        <thead>
                          <tr>
                            <th class="text-left">Publication</th>
                            <th>Genres</th>
                            <th>Price</th>
                            
                                <th class='d-flex'>DA
                                <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                    <p class="tooltiptext">
                                    <span>Domain authority</span><br>
                                    Search engine ranking score (1-100)
                                    </p>
                                </div>
                                </th>
                            <th>TAT
                              <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                <p class="tooltiptext">
                                  <span>Time at arrival</span><br>
                                  Estimated time to deliver
                                </p>
                              </div>
                            </th>
                            <th>Article Type</th>
                            <th>Country/Region</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                        @foreach($publication_data as $pd)
                          <tr>
                            <td class="cpy_content">
                              <div class="cpy_logo">
                                <div class="cpy_logo_img">
                                  <img src="{{ asset('partner-asset/img/company_logo1.png') }}" class="img-fluid" alt="">
                                </div>
                                <span>
                                  <a href="{{ $pd['url'] ?? '' }}">{{ $pd['title'] ?? '' }}</a>
                                </span>
                              </div>
                            </td>
                            <?php $genre = json_decode($pd['genre']); ?>
                            <?php
                                $genreIds = explode(',', $pd['genre']);
                                $items = str_replace(['[', '"', ']'], '', $genreIds);
                                // print_r($items);
                                $genreNames = App\Models\Genre::whereIn('id', $items)->pluck('name')->toArray();
                            ?>
                            @if (count($genre) == 1)
                             <td class="genre-wrap"><span>{{ $genreNames[0] ?? ''}}</span></td>
                            @else
                            <td>{{ count($genre)  ?? ''}} genres
                              <div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i>
                                <ul class="tooltiptext">
                                    @for ($g = 0; $g < count($genreNames); $g++)    
                                        <li>{{$genreNames[$g] ?? ''}}</li>
                                    @endfor
                                </ul>
                              </div> 
                            </td>
                            @endif 
                            
                            <td>${{ $pd['price'] ?? '' }}</td>
                            <td>{{ $pd['domain_authority'] ?? '' }}</td>
                            <td>{{ $pd['tat'] ?? 0 }} Week</td>
                            <td>{{$pd['article_type']['type'] ?? '' }}</td>
                            <td>{{$pd['region']['country_name'] ?? '' }}</td>
                          </tr>
                        @endforeach 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
<!-- Press package starts here! -->
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="business_wrapper">
              
                  @foreach($press_packages as $pp)
                  @if(count($pp['package']) !== 0)
                  <div class="business_content">
                    <h3>{{ $pp->name }}</h3>
                    <div class="business_grid">
                      @foreach($pp['package'] as $package)
                      <div class="business_wreap">
                        <h4 class="bundle_text"><span>{{$package->title ?? ''}}</span> <span class="business_price">${{$package->bundle_price ?? ''}}.00</span></h4>
                        <h4 class="retail_text">Retail: ${{$package->retail_price ?? ''}}.00</h4>
                        <div class="business_list">
                          <?php $category = json_decode($package['publication_id']); ?>
                          <h5>Publication</h5>
                          <ul class="m-0">
                            @foreach($category as $c)
                            <?php
                             $publication = App\Models\Publication::find($c);
                            ?>
                            <li>{{ $publication->title ?? '' }}</li>
                            
                            @endforeach
                          </ul>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  @endif
                  @endforeach
                
                </div>
              </div>
<!-- Press release start here -->
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="business_wrapper">
                  <div class="business_content">
                    <h3>Publications</h3>
                    <div class="business_grid">
                    @foreach($press_release as $pr)
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">${{ $pr->price ?? '' }}</span></h4>
                            <p>{{ $pr->title ?? '' }}</p>
                        </div>
                    @endforeach
                    </div>
                  </div>
                </div>
              </div>
<!-- Other service start here -->
              <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab">
                <div class="business_wrapper">
                  <div class="business_content">
                    <h3>Other Services</h3>
                    <div class="business_grid">
                    @foreach($other_services as $os)
                      <div class="business_wreap">
                        <h4 class="bundle_text"><span>{{ $os->title }}</span></h4>
                        <div class="business_list">
                          <h5>Publication</h5>
                          <?php $serviceList = json_decode($os->publication_id); ?>
                          <ul class="m-0">
                            @for ($s=0; $s< count($serviceList); $s++)
                                <li>{{ $serviceList[$s] ?? ''}}</li>
                            @endfor
                            
                          </ul>
                        </div>
                      </div>
                    @endforeach  
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- New search filter start from here  -->
    <script>
        $(document).ready(function() {
            var valueSelected;
                $('select').on('change', function(e) {
                    var optionSelected = $("option:selected", this);
                    valueSelected = this.value;
                    formControlFunction(); // Call the formControlFunction
                });

                $('.form-control').change(formControlFunction); // Call the formControlFunction

                function formControlFunction() {
                    // console.log(valueSelected);
                    var publicationname = $('#publication_name').val();
                    var sorted_filter = $('#sorted_filter').val();
                    var min_value = $('.min_value').val().replace(/,/g, "");
                    var max_value = $('.max_value').val().replace(/,/g, "");
                    var maxValue = $('#maxValue').val();
                    var minValue = $('#minValue').val();
                    var generesfilter = $('.generesfilter').val();
                    var region_filter = $('#region_filter').val();
                    var generesfilter;
                    var countChecked = function() {
                    generesfilter = $("input:checked").length;
                    };

                    countChecked();

                    $("input[type=checkbox]").on("click", countChecked);
                    if (publicationname == '' && min_value == minValue && max_value == maxValue && sorted_filter == 'asc' && generesfilter == 0 && valueSelected == '') {
                    $('#apply_button').addClass('d-none');
                    } else {
                    $('#apply_button').removeClass('d-none');
                    }
                }
                });

    </script>


  <script>
    // $('.form-control').change(function(){
    //     $('#apply_button').removeClass('d-none');
    // });
    $('input:checkbox').change(function(){
        var id = $(this).val();
        if($(this).is(":checked")) {
            $('#genere_label'+id).addClass("selected");
        } else {
            $('#genere_label'+id).removeClass("selected");
        }
    });
    $('#slider-range').on('click',function(){
        $('#apply_button').removeClass('d-none');
        var minprice = $('#slider-range-value1').html().replace('$','');
        var maxprice = $('#slider-range-value2').html().replace('$','');
        // alert('change'+'maxprice'+maxprice+'minprice'+minprice);
        $('.min_value').val(minprice);
        $('.max_value').val(maxprice);
    });
    $('#apply_button').on('click', function(){
        var formData = $('#filterform').serialize();
        $.ajax({
            url: "{{ route('search-filter') }}",
            type: "POST",
            data: formData,
            success: async function(data) {
                
                console.log(data);
              $('.showtotal').html(data.length);
                $('#reset_button').removeClass('d-none');
                divdata = [];
                for (let key in data) {
                    let value = data[key];
                    genre = JSON.parse(value.genre).length;
                    var genreIds = value.genre.split(",");
                    var items = genreIds.map(function (item) {
                    return JSON.parse(item.replace(/[\[\]"]/g, ''));
                    });
                    try {
                        var genreNames = await retrieveGenreNames(items);
                        var image = "{{ asset('partner-asset/img/company_logo1.png') }}";
                        if(genreNames.length == 1){
                        html = '<tr><td class="cpy_content"><div class="cpy_logo"><div class="cpy_logo_img"><img src="'+image+'" class="img-fluid" alt=""></div><span><a href="'+value.url+'">'+value.title+'</a></span></div></td><td>'+ genreNames.join(", ") +'</td><td>$'+value.price+'</td><td>'+value.domain_authority+'</td><td>'+value.tat+' Week</td><td>'+value.article_type.type+'</td><td>'+value.region.country_name+'</td></tr>';
                        }else{
                        var genresList = genreNames.map(function(genre) {
                            return '<li>'+genre+'</li>';
                            }).join('');
                            html = '<tr><td class="cpy_content"><div class="cpy_logo"><div class="cpy_logo_img"><img src="'+image+'" class="img-fluid" alt=""></div><span><a href="'+value.url+'">'+value.title+'</a></span></div></td><td>'+genreNames.length+' genres<div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i><ul class="tooltiptext">'+genresList+'</ul></div> </td><td>$'+value.price+'</td><td>'+value.domain_authority+'</td><td>'+value.tat+' Week</td><td>'+value.article_type.type+'</td><td>'+value.region.country_name+'</td></tr>';
                       
                        }
                        divdata.push(html);
                        } catch (error) {
                        console.error(error);
                        }
                    }
              $('tbody').html(divdata);
              $('#publication_length').html(divdata.length);
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

    $('#reset_button').on('click', function() {
        location.reload();
    });
     // Get gerne name according to data
    function retrieveGenreNames(items) {
        return new Promise(function (resolve, reject) {
            $.ajax({
            method: 'post',
            url: '{{ route('genre-name') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                "items": items,
            },
            dataType: 'json',
            beforeSend: function() {
                $('.spinner_wreap').removeClass('d-none');
                },
            success: function (data) {
                $('.spinner_wreap').addClass('d-none');
                resolve(data); // Resolve the promise with the genre name data
            },
            error: function (error) {
                $('.spinner_wreap').addClass('d-none');
                reject(error); // Reject the promise with the error information
            }
            });
        });
        }


</script>

  @endsection


