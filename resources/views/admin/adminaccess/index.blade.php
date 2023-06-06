@extends('admin_layout/master')
@section('content')
<div class="nk-block-head d-flex justify-content-between">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Update Admin Details</h4>
        </div>
        <div class="nk-block-des text-soft">
                {{ Breadcrumbs::render('Update-access') }}
         </div>
    </div>
<div class="code-block">
                 <h6 class="overline-title title"></h6>
                 <form id="admin_form" action="" method="POST">
                    @csrf
                    <div class="form-group">
                         <label class="form-label" for="full-name">Email</label>
                         <div class="form-control-wrap">
                         <span class="form-control">{{ $AdminDetails->email ?? ''}}</span>
                        <input type="hidden" class="form-control" id="old-email" name="oldemail" value="{{ $AdminDetails->email ?? ''}}">
                         </div>
                     </div>
                    <div class="form-group">
                         <label class="form-label" for="full-name">New Admin Email</label>
                         <div class="form-control-wrap">
                             <input type="email" class="form-control" id="email" name="email">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="full-name">New Admin Password</label>
                         <div class="form-control-wrap">
                             <input type="password" class="form-control" id="password" name="password">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="full-name">Confirm Admin Password</label>
                         <div class="form-control-wrap">
                             <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                         </div>
                     </div>
                     <div class="form-group">
                        <button type="button" class="btn btn-dark text-light bg-dark updateDeatils">Update</button>
                     </div>     
                 </form>
</div>
<script>
    $('.updateDeatils').click(function (e){
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirm = $('#password_confirmation').val();
        if (password != '' || confirm != '') {
            if (password !== confirm) {
                NioApp.Toast('Password and confirm do not match', 'error', { position: 'top-right' });
                return false;
            }
        }
            if (password === '' && email === '') {
                NioApp.Toast('Must one fields is required', 'error', { position: 'top-right' });
                return false;
            }
        var formData = $('#admin_form').serialize();

        // console.log(formData);
        $.ajax({
            url: 'updateAdminDeatils',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $('.spinner-container').show();
            },
            success: function(data) {
                setTimeout(function() {
                    $('.spinner-container').hide();
                    NioApp.Toast(data, 'success', { position: 'top-right' });
                    location.reload();
                }, 1000);
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
</script>
@endsection