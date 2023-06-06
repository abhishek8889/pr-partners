<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('partner-asset/css/style.css') }}"/>
  <link rel="stylesheet" href="{{ asset('partner-asset/css/responsive.css') }} "/>
  <title>login page</title>
</head>
<body class="login_bg">

  <header class="header_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header_content justify-content-center">
            <div class="logo_img text-center">
              <img src="{{ asset('partner-asset/img/Logo.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="login_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login_content">
            <div class="login_img">
              <img src="{{ asset('partner-asset/img/login.png') }}" class="img-fluid" alt="">
            </div>
            <h2>Protected Page</h2>
            <form action="{{ route('login-proc') }}" method="POST">
              @csrf
              <input type="password" class="form-control" name="password" id="inputEmail4" placeholder="Enter your password">
             <div class="text text-left text-danger"> {{ Session::get('error') }}</div>
              <button class="btn" role="button">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_content">
            <p>© 2023 PR Partners International</p>
          </div>
        </div>
      </div>
    </div>
  </footer> 

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('partner-asset/js/script.js') }} "></script>
   
</body>
</html>