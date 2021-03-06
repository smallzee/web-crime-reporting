
<!-- navbar start -->
<div class="politix-navbar">
    <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{url('/')}}"> <img src="{{image_url('logo.png')}}" style="width: 50px; height: 50px;" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="navbar-nav menu-open">
                    <li><a href="{{url('/')}}"><i class="fa fa-homep"></i> Home</a></li>
                    <li><a href="{{url('reporting')}}">Report Crime</a></li>
                    <li><a href="{{url('about')}}">About Developer</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                    <li><a href="{{url('auth/login')}}">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
