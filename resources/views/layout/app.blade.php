<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} &dash; {{ getenv('APP_NAME') }}</title>
    <!-- favicon -->
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/animate.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/bootstrap.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/magnific-popup.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/lib/css/slick-theme.css')}}" />
    <!-- nice select -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/nice-select.css')}}">
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/swiper.min.css')}}" />
    <!-- animated css -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/animated-slider.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/owl.carousel.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/font-awesome.min.css')}}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/flaticon.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/style.css')}}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/css/responsive.css')}}">

</head>
<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

@include('layout.header')

@stack('content')

@include('layout.footer')

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="{{asset('assets/lib/js/vendor/jquery-2.2.4.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/lib/js/vendor/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/lib/js/vendor/bootstrap.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/lib/js/vendor/jquery.magnific-popup.js')}}"></script>
<!-- wow -->
<script src="{{asset('assets/lib/js/vendor/wow.min.js')}}"></script>
<!-- animated slider -->
<script src="{{asset('assets/lib/js/vendor/animated-slider.js')}}"></script>
<!-- nice select -->
<script src="{{asset('assets/lib/js/vendor/nice-select.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/lib/js/vendor/owl.carousel.min.js')}}"></script>
<!-- Slick -->
<script src="{{asset('assets/lib/js/vendor/slick.min.js')}}"></script>
<!-- Slick Animation -->
<script src="{{asset('assets/lib/js/vendor/slick-animation.js')}}"></script>
<!-- counterup -->
<script src="{{asset('assets/lib/js/vendor/jquery.counterup.min.js')}}"></script>
<!-- waypoint -->
<script src="{{asset('assets/lib/js/vendor/waypoints.min.js')}}"></script>
<!-- imageloaded -->
<script src="{{asset('assets/lib/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<!-- swiper -->
<script src="{{asset('assets/lib/js/vendor/swiper.min.js')}}"></script>
<!-- isotope -->
<script src="{{asset('assets/lib/js/vendor/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('assets/lib/js/vendor/jquery.classyloader.js')}}"></script>

<!-- main js -->
<script src="{{asset('assets/lib/js/script.js')}}"></script>
<script src="{{asset('assets/lib/js/main.js')}}"></script>

</body>
</html>
