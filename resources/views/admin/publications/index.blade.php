@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg" id="maindiv">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Publication Table</h4>
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
                        <!-- <th class="nk-tb-col ">
                            <div class="">
                                <input type="checkbox" class="checkall" id="uid">
                                <label class="" for="uid"></label>
                            </div>
                        </th> -->
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext " id="maincheck">
                                <input type="checkbox" class="custom-control-input checkall" id="page-0">
                                <label class="custom-control-label" for="page-0"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Publication</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Domain Authority</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">TAT</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Genre</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Article type</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Country / Region</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                @for ($i = 0; $i < count($publications); $i++)
                      
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="{{ $publications[$i]['id'] ?? ''}}">
                                <label class="custom-control-label" for="{{ $publications[$i]['id'] ?? ''}}"></label>
                            </div>
                        </td>
                        <!-- <td class="nk-tb-col ">
                            <div class="">
                                <input type="checkbox" class="" id="{{ $publications[$i]['id'] ?? ''}}">
                                <label class="" for="{{ $publications[$i]['id'] ?? ''}}"></label>
                            </div>
                        </td> -->
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
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                 <!-- <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>  -->
                                                 <li><a href="{{ url('admin-dashboard/update-publications')}}/{{ $publications[$i]['id'] ?? ''}}"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                <!-- <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li> -->
                                                <li><a href="#" class="remove" data-id="{{ $publications[$i]['id'] ?? ''}}"><em class="icon ni ni-trash"></em><span>Remove</span></a></li> 
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  --> 
                    @endfor
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->
<script>
// $(document).ready(function() {
//     $('.checkall').change(function() {
//         const checkbox = $(this);

//         if (checkbox.is(':checked')) {
//             $('input[type="checkbox"]').prop('checked', true);
//         } else {
//             $('input[type="checkbox"]').prop('checked', false);
//         }
//     });
// });

// $(document).ready(function() {
    // $('.paginate_button page-item').on('click', function() {
    //     // const pageId = $(this).data('dt-idx');
    //     // console.log('Page ID:', pageId);
    //     console.log('cliked page');
    // });

    // Rest of your code...
    // $(document).on('click', '.page-link', function(){

    //    const pageId = $(this).data('dt-idx');
    //     console.log('Page ID:', pageId);
    //     $("#maincheck").find('checkall').attr('id',pageId);
    
    // }); 

//     $(document).ready(function() {
//     $(document).on('click', '.pagination .page-link', function() {
//         const pageId = $(this).data('dt-idx');
//         console.log('Clicked Page ID:', pageId);
//         // Perform any necessary operations for the clicked page here
//     });

//     $(document).on('change', '#maincheck input.checkall', function() {
//         const isAllChecked = $(this).is(':checked');
//         const currentPage = $(this).closest('.pagination').find('.paginate_button.active');
//         const checkboxes = currentPage.find('input[type="checkbox"]');
        
//         checkboxes.prop('checked', isAllChecked);
//     });

//     // Rest of your code...
// });
// $(document).ready(function() {
//     $(document).on('click', '.pagination .page-link', function() {
//         const pageId = $(this).data('dt-idx');
//         console.log('Clicked Page ID:', pageId);
        
//         $('.checkall').attr('data-page', pageId); // Set the 'data-page' attribute to the page ID
        
//         console.log($('.checkall').attr('data-page'));
//     });
    
//     $(document).on('click', '.checkall', function(event) {
//         event.preventDefault();
//         const pageId = $(this).attr('data-page'); // Retrieve the page ID from the 'data-page' attribute
//         console.log('Clicked Page ID:', pageId);
//         const targetIdx = pageId; // Replace with the desired data-dt-idx value
        
//         // Find the <a> tag with the matching data-dt-idx value and trigger the click event
//         $('a[data-dt-idx="' + targetIdx + '"]').click();
        
//         // Uncheck the checkboxes
//         $('input[type="checkbox"]').prop('checked', false);
//     });
// });
$(document).ready(function() {
    $(document).on('click', '.pagination .page-link', function() {
        const pageId = $(this).data('dt-idx');
        console.log('Clicked Page ID:', pageId);
        
        $('.checkall').attr('data-page', pageId); // Set the 'data-page' attribute to the page ID
        
        console.log($('.checkall').attr('data-page'));
    });
    
    $(document).on('click', '.checkall', function(event) {
        event.preventDefault();
        const pageId = $(this).attr('data-page'); // Retrieve the page ID from the 'data-page' attribute
        console.log('Clicked Page ID:', pageId);
        const targetIdx = pageId; // Replace with the desired data-dt-idx value
        
        // Find the <a> tag with the matching data-dt-idx value and trigger the click event
        $('a[data-dt-idx="' + targetIdx + '"]').click();
        
        // Toggle the checkboxes
        $('input[type="checkbox"]').each(function() {
            $(this).prop('checked', !$(this).prop('checked'));
        });
    });
});


                // $(document).ready(function() {
                //     $(document).on('click', '.pagination .page-link', function() {
                //         const pageId = $(this).data('dt-idx');
                //         console.log('Clicked Page ID:', pageId);
                        
                //         $('.checkall').attr('data-page', pageId); // Set the 'data-page' attribute to the page ID
                        
                //         console.log($('.checkall').attr('data-page'));
                //     });
                    
                //     $(document).on('click', '.checkall', function(event) {
                //         event.preventDefault();
                //         const pageId = $(this).attr('data-page'); // Retrieve the page ID from the 'data-page' attribute
                //         console.log('Clicked Page ID:', pageId);
                //         const targetIdx = pageId; // Replace with the desired data-dt-idx value
                //         // Find the <a> tag with the matching data-dt-idx value and trigger the click event
                //         $('a[data-dt-idx="' + targetIdx + '"]').click();
                //         // if($(this).prop('checked'),true){
                //             $(this).prop('checked',true);
                //             $('input[type="checkbox"]').prop('checked', true);
                //             return true;
                //         // }else{
                //         //     $(this).prop('checked',true);
                //         // $('input[type="checkbox"]').prop('checked', true);
                //         // }
                //     });
                // });

// $(document).on('click', '.checkall', function(e) {
//     e.preventDefault();
//     console.log($(this).attr('id'));
// });
// $(document).on('click', '#page-' + pageId, function() {
//     console.log('Clicked Page ID:', $(this).data('dt-idx'));
// });

//     $(document).ready(function() {
//     $(document).on('click', '.pagination .page-link', function() {
//         const pageId = $(this).data('dt-idx');
//         console.log('Clicked Page ID:', pageId);
//         // Perform any necessary operations for the clicked page here
//     });

//     // Rest of your code...
// });


//     $(document).ready(function() {
//     $('#maincheck input.checkall').change(function() {
//         const isAllChecked = $(this).is(':checked');
//         const currentPage = $(this).closest('.pagination').find('.paginate_button.active');
//         const checkboxes = currentPage.find('input[type="checkbox"]');
        
//         checkboxes.prop('checked', isAllChecked);
//     });
// });


// });
// $(document).ready(function() {
    // $(document).on('click', '.checkall', function(){
    //     const checkbox = $(this);
    //     const currentPage = checkbox.closest('.paginate_button.active');
    //     console.log(currentPage);
    //     const pageIdx = currentPage.find('a').data('dt-idx');
    //     console.log('Page ID:', pageIdx);
    //     const checkboxes = $('input[type="checkbox"][data-dt-idx="' + pageIdx + '"]');
    //     console.log(checkboxes);

    //     if (checkbox.is(':checked')) {
    //         checkboxes.prop('checked', true);
    //     } else {
    //         checkboxes.prop('checked', false);
    //     }
    // });

// });




</script>
<script>
    //  Remove function 
    $(document).ready(function () {
        $("body").delegate(".remove", "click", function (e) {
            // $('.remove').click( function (e){
            e.preventDefault();
            var remove_id = $(this).attr('data-id');
            $.ajax({
                url: 'publication-remove',
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
                    // $('.tr'+remove_id).addClass('d-none').remove();
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

</script>
@endsection
