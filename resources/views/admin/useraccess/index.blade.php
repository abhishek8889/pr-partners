@extends('admin_layout/master')
@section('content')
<div class="code-block">
                 <h6 class="overline-title title">Update access token</h6>
                 <form id="token_form" action="{{ route('update-token-procc') }}" method="POST">
                    @csrf
                     <div class="form-group">
                         <label class="form-label" for="full-name">Access Token</label>
                         <div class="form-control-wrap">
                             <input type="password" class="form-control" id="password" name="password">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="full-name">Confirm Access Token</label>
                         <div class="form-control-wrap">
                             <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                         </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-dark text-light bg-dark">Update</button>
                     </div>     
                 </form>
</div>
<script>
    $(document).ready(function(){
        $('#token_form').on('submit',function(e){
            e.preventDefault();
            formdata = new FormData(this);
                $.ajax({
                method: 'post',
                url: '{{route('update-token-procc')}}',
                data: formdata,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                $('.spinner-container').show();
                },
                success: function(response) {
                    $('.spinner-container').hide();
                    NioApp.Toast(response, 'success', { position: 'top-right' });
                    $('#password').val('');
                    $('#password_confirmation').val('');
                },
                error: function (error) {
                        $('.spinner-container').hide();
                  NioApp.Toast(error.responseJSON.message, 'error', { position: 'top-right' });
                }
            });
        });
    });
</script>
@endsection