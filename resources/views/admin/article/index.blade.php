@extends('admin_layout/master')
@section('content')
<div class="nk-content ">
    <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Article Type Add</h4>
                    <div class="nk-block-des">
                        <!-- <p>You can alow display form in column as example below.</p> -->
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="#" id="article_form">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="genre_name">Article Type</label>
                                    <div class="form-control-wrap">
                                        @csrf
                                        <input type="text" class="form-control" name="type" id="type">
                                    </div>
                                    <div class="text-danger" id="error_wrap"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save article</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false" id="table">
                <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col">
                                <span class="tb-odr-id">#</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="tb-odr-total">Article Type</span>
                            </th>
                            <th class="nk-tb-col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0; ?>
                        @foreach($article_data as $ad)
                        <?php $count = $count+1 ?>
                        <tr class="tb-odr-item" id="tr{{$ad->id}}">
                            <td class="nk-tb-col">
                                <span class="tb-odr-id">{{ $count }}</span>
                                
                            </td>
                            <td class="nk-tb-col">
                                <span class="">{{ $ad->created_at ?? '' }}</span>
                            </td>
                            <td class="nk-tb-col">
                            <span class="d-none">{{ $ad->type ?? '' }}</span>
                                <span class="tb-odr-total">
                                  <input type="text" id="input{{ $ad->id }}" class="form-control" value="{{ $ad->type ?? '' }}" disabled> 
                                </span>
                            </td>
                            <td class="nk-tb-col">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a data-id="{{ $ad->id  }}" id="edit" class="text-primary">Edit</a></li>
                                            <li><a data-id="{{ $ad->id }}" id="remove" class="text-danger">Remove</a></li>
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
    $(document).ready(function(){
            $('#article_form').on('submit',function(e){
                e.preventDefault();
               
                formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: '{{route('article-add')}}',
                data: formdata,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response) {
                    setTimeout(function() {
                            $('.spinner-container').hide();
                            NioApp.Toast('Article has been saved', 'success', { position: 'top-right' });
                            location.reload();
                        }, 2000);
                },

                // success: function(response)
                // {
                //     setTimeout(function() {
                //         $('.spinner-container').hide();
                //     }, 1000);
                //     $('#type').val('');
                //     $('#error_wrap').html('');
                //     NioApp.Toast('Successfully saved article type', 'info', {position: 'top-right'});
                //     location.reload();
                //     // let first_td = '<span class="tb-odr-id">'+response.total+'</span> ';
                //     // let second_td = '<span class="tb-odr-date">'+response.created_at+'</span>';
                //     // let third_td ='<span class="tb-odr-total"><input type="text" class="form-control" id="input'+response.article.id+'" value="'+response.article.type+'" disabled> </span></span>';
                //     // let dropdown_button = '<a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>';
                //     // let ul_buttons = '<li><a data-id="'+response.article.id+'" id="edit" class="text-primary">Edit</a></li><li><a data-id="'+response.article.id+'" id="remove" class="text-danger">Remove</a></li>';
                //     // $('tbody').prepend(' <tr class="tb-odr-item" id="tr'+response.article.id+'"><td class="nk-tb-col">'+first_td+'</td> <td class="nk-tb-col">'+second_td+'</td><td class="nk-tb-col">'+third_td+'</td><td class="nk-tb-col"><div class="dropdown">'+dropdown_button+'<div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain">'+ul_buttons+'</ul></div></td></tr>');
                //         // Prepend the new row at the beginning of the table body
                //         // $('tbody').prepend(' <tr class="tb-odr-item" id="tr'+response.article.id+'"><td class="nk-tb-col">'+first_td+'</td> <td class="nk-tb-col">'+second_td+'</td><td class="nk-tb-col">'+third_td+'</td><td class="nk-tb-col"><div class="dropdown">'+dropdown_button+'<div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain">'+ul_buttons+'</ul></div></td></tr>');

                //         // // Update the S.No for each row
                //         // var rowCount = 1;
                //         // $('tbody tr.tb-odr-item').each(function() {
                //         // $(this).find('.tb-odr-id').text(rowCount);
                //         // rowCount++;
                //         // });

                //     // $('tbody').append(' <tr class="tb-odr-item" id="tr'+response.article.id+'"><td class="nk-tb-col">'+first_td+'</td> <td class="nk-tb-col">'+second_td+'</td><td class="nk-tb-col">'+third_td+'</td><td class="nk-tb-col"><div class="dropdown">'+dropdown_button+'<div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain">'+ul_buttons+'</ul></div></td></tr>');
                // },
                error: function (error) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                  $('#error_wrap').html(error.responseJSON.message);
                }
            });
    });
    $("body").delegate("#edit","click",function(e){
        e.preventDefault();
        
        var id = $(this).attr('data-id');
        $("input#input"+id).removeAttr('disabled').focus();
        $("input#input"+id).on('change',function(){
            let type = $(this).val();
            
            $.ajax({
                method: 'post',
                url: '{{route('article-action')}}',
                data: { editid:id,type:type, _token:'{{ csrf_token() }}' },
                dataType: 'json',
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response)
                {  
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                     $(this).val(type);
                     $("input#input"+id).prop('disabled', true);
                    NioApp.Toast('Successfully updated article type!', 'info', {position: 'top-right'});
                },
                error: function (error) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    // $("input#input"+id).val(type);
                  NioApp.Toast(error.responseJSON.message, 'error', {position: 'top-right'});
                }
            });
        });

    });
    $("body").delegate("#remove","click",function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
          ele = $(this).parent().parent().parent().parent().parent().parent();
        
        $.ajax({
                method: 'post',
                url: '{{route('article-action')}}',
                data: { deleteid:id, _token:'{{ csrf_token() }}' },
                dataType: 'json',
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response)
                {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    ele.hide();
                    NioApp.Toast('Successfully deleted article type!', 'info', {position: 'top-right'});
                   
                }
            });

    });
});
</script>
@endsection