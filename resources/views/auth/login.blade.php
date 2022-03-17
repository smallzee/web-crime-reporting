<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Login - {{ getenv('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/auth/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/auth/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/auth/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{image_url('logo.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/auth/css/skins/default.css')}}">

</head>
<body id="top">
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 11 start -->
<div class="login-11">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 bg-color-11">
                <div class="form-section">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{image_url('logo.png')}}" style="width: 80px; height: 80px;" alt="logo">
                        </a>
                    </div>
                    <h3>Sign Into Your Account</h3>
                    <div class="login-inner-form">
                        @include('flash')

                        <form action="{{route('login.store')}}" method="post">
                            @csrf
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label" style="margin-bottom: 10px;">Email address</label>
                                <div class="form-box">
                                    <input name="email_address" type="email" required class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                    <input name="password" required type="password" class="form-control" autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 bg-img">
                <div class="info">
                    <h1 class="animate-charcter">Welcome To {{ getenv('APP_NAME') }}</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 11 end -->

<!-- External JS libraries -->
<script src="{{asset('assets/auth/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/js/popper.min.js')}}"></script>
<script src="{{asset('assets/auth/js/bootstrap.bundle.min.js')}}"></script>
<!-- Custom JS Script -->
</body>
</html>
