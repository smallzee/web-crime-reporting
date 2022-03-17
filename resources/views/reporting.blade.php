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
                            <li><a href="{{url('reporting')}}">{{ $page_title }}</a></li>
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
                <div class="col-lg-8">
                    <form class="contact-form" action="{{url('crime_report')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Crime Reporter Name</label>
                                    <input type="text" class="form-control" required placeholder="Crime Reporter Name" name="reporter_name" id="">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Crime Reporter Mobile-No</label>
                                    <input type="text" name="reporter_mobile" class="form-control" placeholder="Crime Reporter Mobile-No" id="">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Crime Category</label>
                                    <select name="crime_category" id="" class="form-control" style="height: 48px;">
                                        <option value="" disabled selected>Select</option>
                                        @foreach(\App\Category::get() as $value)
                                            <option value="{{$value->id}}"> {{ ucwords($value->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Crime Report Location</label>
                                    <input type="text" class="form-control" required placeholder="Crime Report Location" name="offence_location" id="">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Crime Report Details</label>
                                    <textarea name="offence" class="form-control" required placeholder="Crime Report Details" id="" style="resize: none; min-height: 100px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper padding-top-33">
                            <button class="btn btn-custom-primary btn-block">Send Report Case</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 d-flex align-self-center">
                    <div class="content-box-style-01 margin-top-45">
                        <p class="section-subtitle">{{ $page_title }}</p>
                        <h2 class="title">Don't hesitate to report any case</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
