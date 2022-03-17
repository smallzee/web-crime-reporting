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
                            <li><a href="{{url('about')}}">{{ $page_title }}</a></li>
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

    <div class="politx-content-area padding-top-70 margin-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <table class="table table-bordered">
                       <thead>
                       <tr>
                           <th>Full Name</th>
                           <th>Matric Number</th>
                       </tr>
                       </thead>
                    </table>
                </div>
                <div class="col-lg-6 offset-lg-1 d-flex align-self-center">
                    <div class="content-box-style-01 margin-top-45">
                        <p class="section-subtitle">Project Title</p>
                        <h5 class="title">Design and implementation of web based crime information system</h5>
                        <p class="section-subtitle">Supervised By</p>
                        <h5 class="title">Mr. </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endpush
