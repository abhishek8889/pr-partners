@extends('admin_layout/master')
@section('content')
<div class="nk-content ">
    <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Coutnry/Region Add</h4>
                    <div class="nk-block-des">
                        <!-- <p>You can alow display form in column as example below.</p> -->
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="#" id="country_form">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="country_codee">Country/Region code</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="country_code" id="country_codee">
                                    </div>
                                    <div class="text-danger" id="country_code"></div>
                                    <label class="form-label" for="genre_name">Country/Region Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="country_name" id="country_namee">
                                    </div>
                                    <div class="text-danger" id="country_name"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save Region</button>
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
                                <span class="tb-odr-id">Country code</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="tb-odr-total">Article Type</span>
                            </th>
                            <th class="nk-tb-col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($regions as $r)
                        <tr class="tb-odr-item" id="tr{{$r->id}}">
                            <td class="nk-tb-col">
                                <span class="tb-odr-id">{{$i++}}</span>
                            </td>
                            <td class="nk-tb-col">
                            <span class="d-none">{{ $r->country_code ?? '' }}</span>
                                <span class="tb-odr">
                                <input type="text" id="country_code{{ $r->id }}" class="form-control" value="{{ $r->country_code ?? '' }}" disabled> 
                                </span>
                            </td>
                            <td class="nk-tb-col">
                            <span class="d-none">{{ $r->country_name ?? '' }}</span>

                                <span class="tb-odr-total">
                                  <input type="text" id="country_name{{ $r->id }}" class="form-control" value="{{ $r->country_name ?? '' }}" disabled> 
                                </span>
                            </td>
                            <td class="nk-tb-col">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a data-id="{{ $r->id  }}" id="edit" class="text-primary">Edit</a></li>
                                            <li><a data-id="{{ $r->id }}" id="remove" class="text-danger">Remove</a></li>
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
            $('#country_form').on('submit',function(e){
                e.preventDefault();
            //    $('#country_name').html('');
            //    $('#country_code').html('');
                formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: '{{route('region-add')}}',
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
                            NioApp.Toast('Region name add successfully', 'success', { position: 'top-right' });
                            location.reload();
                        }, 2000);
                },
                    // setTimeout(function() {
                    //     $('.spinner-container').hide();
                    // }, 1000);
                    // $('#country_codee').val('');
                    // $('#country_namee').val('');
                    // NioApp.Toast('Successfully saved regions', 'info', {position: 'top-right'});
                    // location.reload();
                    // let first_td = '<span class="tb-odr-id">'+response.total+'</span> ';
                    // let second_td = '<span class="tb-odr"><input type="text" id="country_code'+response.region.id+'" class="form-control" value="'+response.region.country_code+'" disabled> </span>';
                    // let third_td ='<span class="tb-odr-total"><input type="text" class="form-control" id="country_name'+response.region.id+'" value="'+response.region.country_name+'" disabled> </span></span>';
                    // let dropdown_button = '<a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>';
                    // let ul_buttons = '<li><a data-id="'+response.region.id+'" id="edit" class="text-primary">Edit</a></li><li><a data-id="'+response.region.id+'" id="remove" class="text-danger">Remove</a></li>';
                    // $('tbody').prepend(' <tr class="tb-odr-item" id="tr'+response.region.id+'"><td class="nk-tb-col">'+first_td+'</td> <td class="nk-tb-col">'+second_td+'</td><td class="nk-tb-col">'+third_td+'</td><td class="nk-tb-col"><div class="dropdown">'+dropdown_button+'<div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain">'+ul_buttons+'</ul></div></td></tr>');

                        // Update the S.No for each row
                        // var rowCount = 1;
                        // $('tbody tr.tb-odr-item').each(function() {
                        // $(this).find('.tb-odr-id').text(rowCount);
                        // rowCount++;
                        // });
                    // $('tbody').append(' <tr class="tb-odr-item" id="tr'+response.region.id+'"><td class="nk-tb-col">'+first_td+'</td> <td class="nk-tb-col">'+second_td+'</td><td class="nk-tb-col">'+third_td+'</td><td class="nk-tb-col"><div class="dropdown">'+dropdown_button+'<div class="dropdown-menu dropdown-menu-end dropdown-menu-xs"><ul class="link-list-plain">'+ul_buttons+'</ul></div></td></tr>');
                // },
                error: function(jqXHR, textStatus, errorThrown) {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                        var errors = jqXHR.responseJSON.errors;
                        for (var fieldName in errors) {
                            if (errors.hasOwnProperty(fieldName)) {
                                var errorMessages = errors[fieldName];
                                console.log(fieldName);
                                $('#'+fieldName).html(errors[fieldName]);
                            }
                        }
                        // $('.editname'+edit_id).val($('.editname'+edit_id).attr('old-name'));
                    }
                    
            });
    });
    //delete
    $("body").delegate("#remove","click",function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
          ele = $(this).parent().parent().parent().parent().parent().parent();
        // console.log(id)
        $.ajax({
                method: 'post',
                url: '{{route('region-action')}}',
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
    //update
    $("body").delegate("#edit","click",function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        console.log(id);
        $("input#country_name"+id).removeAttr('disabled');
        $("input#country_code"+id).removeAttr('disabled');
        // ele = $(this).parent().parent().parent().parent();
        // ele.append('<a id="update"'++'>update</a>');
        $("input#country_name"+id).on('change',function(){
            var country_name = $(this).val();
            var country_code = $("input#country_code"+id).val();
            $.ajax({
                method: 'post',
                url: '{{route('region-action')}}',
                data: { editid:id,country_name:country_name,country_code:country_code, _token:'{{ csrf_token() }}' },
                dataType: 'json',
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response)
                {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    $("input#country_name"+id).prop('disabled', true);
                    $("input#country_code"+id).prop('disabled', true);
                    NioApp.Toast('Successfully updated country name!', 'info', {position: 'top-right'});
                }
            }); 
        });
        $("input#country_code"+id).on('change',function(){
            var country_name = $("input#country_name"+id).val();
            var country_code = $(this).val();
            $.ajax({
                method: 'post',
                url: '{{route('region-action')}}',
                data: { editid:id,country_name:country_name,country_code:country_code, _token:'{{ csrf_token() }}' },
                dataType: 'json',
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response)
                {
                    setTimeout(function() {
                        $('.spinner-container').hide();
                    }, 1000);
                    $("input#country_name"+id).prop('disabled', true);
                    $("input#country_code"+id).prop('disabled', true);
                    NioApp.Toast('Successfully updated country name!', 'info', {position: 'top-right'});
                }
            }); 
        });
    });




});
</script>
@endsection