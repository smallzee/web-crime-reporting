@extends('admin.layout')
@section('content')

    <div class="col-sm-12">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $page_title }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                <form action="{{url('admin/update_user')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" value="{{ $user->email_address }}" readonly="" required placeholder="Email Address" id="">
                        <small>Please Note : Email address cannot be change</small>
                    </div>

                    <input type="hidden" name="id" value="{{ $user->id }}" id="">

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" value="{{ $user->full_name }}" required placeholder="Full Name" name="full_name" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" value="{{ $user->phone_number }}" required placeholder="Phone Number"  name="phone_number" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Service No</label>
                        <input type="text" class="form-control" value="{{ $user->service_no }}" required placeholder="Service No"  name="service_no" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Rank</label>
                        <select name="rank" required id="" class="form-control">
                            <option value="" disabled selected>Select</option>
                            @foreach(array('Police technician','Police officer','police detective','Police corporal','Police sergeant','Police lieutenant','Police captain','Deputy police chief','Chief of police') as $value)
                                <option value="{{ $value }}" {{ ($value == $user->rank) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>


    </div>

@endsection
