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
                 <form id="admin_form" action="{{ route('update-token-procc') }}" method="POST">
                    @csrf
                    <div class="form-group">
                         <label class="form-label" for="full-name">Email</label>
                         <div class="form-control-wrap">
                             <input type="email" class="form-control" id="old-email" name="oldemail" disabled value="{{ $AdminDetails->email ?? ''}}">
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
    $('.updateDeatils').click(function (){
        var form = $('#admin_form').serialize();
        console.log(form);
        $.ajax({
            url: 'updateAdminDeatils',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'form': form,
            },
            success: function(data) {
                console.log(data);
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