@extends('layout.app')

@push('content')
    <!-- banner start -->
    <div class="banner-style-2">
        <div class="banner-slider-2">
            <div class="banner-single-style-2">
                <h2>We'll build superior<br> nation!</h2>
                <p>Lorem ipsum dummy text are used in this section so replace your text here.<br> Lorem ipsum dummy text are used in this section</p>
                <div class="thumb">
                    <img src="{{image_url('ig.png')}}" style="height: 600px" alt="">
                </div>
            </div>
            <div class="banner-single-style-2">
                <h2>We'll build superior<br> nation!</h2>
                <p>Lorem ipsum dummy text are used in this section so replace your text here.<br> Lorem ipsum dummy text are used in this section</p>
                <div class="thumb">
                    <img src="{{image_url('ig2.png')}}" style="height: 600px" alt="">
                </div>
            </div>
        </div>
        <div class="banner-left">
            <ul class="banner-two-social">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <p class="scroll-style-02"> <a href="#"><span>↼</span> Scroll down</a></p>
        </div>
        <div class="controler-wrapper-style-03">
            <div class="progressbar">
                <span class="home-slider-progress"></span>
                <span class="home-slider-progress-active"></span>
            </div>
            <span class="active-controler">01</span><span>/</span><span class="total-controler">04</span>
        </div>
    </div>
    <!-- banner end -->

    <!-- action area start -->
    <div class="action-area padding-top-120 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">Action for</p>
                        <h2 class="title">What we do?</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br> consequat. Globally turnkey applicationLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore</p>
                        <div class="btn-wrapper align-self-center margin-top-50">
                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="goal-area">
                        <ul class="goal-list">
                            <li>
                                <div class="icon"><i class="flaticon-financial"></i></div>
                                <div class="content">
                                    <h4 class="title">Economic Viability</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-hospital"></i></div>
                                <div class="content">
                                    <h4 class="title">Good Governance</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-earth-globe"></i></div>
                                <div class="content">
                                    <h4 class="title">Foreign Policy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-wrapper text-center">
                            <a href="#">See more Goals</a> ➝
                        </div>
                        <div class="mission-area">Mission</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- action area end  -->

    <!-- team area start  -->
    <div class="guest-area padding-bottom-90" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center margin-bottom-55">
                        <h2 class="section-title">Meet our board</h2>
                    </div>
                </div>
            </div>
            <div class="row about-member-count">
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box-style-03 text-center margin-bottom-30 margin-top-50">
                        <div class="memeber-img">
                            <img src="{{image_url('ig2.png')}}" alt="">
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Charif Barrani</h4>
                            <p>IG</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box-style-03 text-center margin-bottom-30 margin-top-50">
                        <div class="memeber-img">
                            <img src="{{image_url('dsp.jpg')}}" alt="">
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Charif Barrani</h4>
                            <p>DSP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box-style-03 text-center margin-bottom-30 margin-top-50">
                        <div class="memeber-img">
                            <img src="{{image_url('asp.jpg')}}" alt="">
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Peace Ibekwe A.</h4>
                            <p>CP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box-style-03 text-center margin-bottom-30 margin-top-50">
                        <div class="memeber-img">
                            <img src="{{image_url('dig.png')}}" alt="">
                        </div>
                        <div class="sb-content">
                            <h4 class="title">Joseph Obiajulu E.</h4>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end  -->
@endpush
