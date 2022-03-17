@extends('layout.app')

@push('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-240">
                        <h1 class="page-title">{{ $page_title }}</h1>
                        <ul class="page-list">
                            <li><a href="{{url('/')}}">Home /</a></li>
                            <li><a href="{{url('contact')}}">{{ $page_title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-icon">
            <i class="flaticon-fireworks"></i>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="contact-info-area margin-top-120 margin-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box-style-04 text-center margin-bottom-30">
                        <div class="sb-icon">
                            <a href="#"><i class="flaticon-phone"></i></a>
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Call us any time</h4>
                            <span>+5487 2545112 65841</span><br>
                            <span>+5487 2541511 45156</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box-style-04 text-center margin-bottom-30">
                        <div class="sb-icon">
                            <a href="#"><i class="flaticon-sent-mail"></i></a>
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Email your Problem</h4>
                            <span>Official: example@politics.com</span><br>
                            <span>Help line: example@politics.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box-style-04 text-center margin-bottom-30">
                        <div class="sb-icon">
                            <a href="#"><i class="flaticon-place"></i></a>
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Visit our Office</h4>
                            <span>490 E North. Orlando, FL </span><br>
                            <span>North America</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="politx-content-area padding-top-70 margin-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" required id="name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" required id="number" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" id="msg" required style="resize: none" cols="30" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="btn-wrapper padding-top-33">
                            <button class="btn btn-custom-primary btn-block">Send your message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 offset-lg-1 d-flex align-self-center">
                    <div class="content-box-style-01 margin-top-45">
                        <p class="section-subtitle">Contact us</p>
                        <h2 class="title">Don't hesitate to send us a message</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endpush
