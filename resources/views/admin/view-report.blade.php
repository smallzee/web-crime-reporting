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

                <table class="table table-bordered">
                    <tr>
                        <td>Reporter Name </td>
                        <td>{{ $reporting->reporter_name }}</td>
                    </tr>
                    <tr>
                        <td>Reporter Phone Number </td>
                        <td>{{ $reporting->reporter_mobile}}</td>
                    </tr>
                    <tr>
                        <td>Crime Category </td>
                        <td>{{ $reporting->category->name }}</td>
                    </tr>
                    <tr>
                        <td>Crime Code </td>
                        <td>{{ $reporting->category->crime_code }}</td>
                    </tr>
                    <tr>
                        <td>Crime Penalty </td>
                        <td>{{ $reporting->category->crime_penalty }}</td>
                    </tr>
                    <tr>
                        <td>Offence </td>
                        <td>{{ $reporting->offence }}</td>
                    </tr>
                    <tr>
                        <td>Crime Location </td>
                        <td>{{ $reporting->offence_location }}</td>
                    </tr>
                    <tr>
                        <td>IPO In-Charge</td>
                        <td>{{ (!empty($reporting->ipo_incharge)) ? $reporting->ipo_incharge : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Crime Status</td>
                        <td>{{ (!empty($reporting->status)) ? $reporting->status : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ $reporting->created_at }}</td>
                    </tr>
                </table>

                <h5 class="page-header">Status</h5>

                <form action="{{url('admin/update_crime')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">IPO In-charge</label>
                        <input type="text" class="form-control" required placeholder="IPO In-Charge" value="{{ $reporting->ipo_incharge }}" name="ipo_incharge" id="">
                    </div>

                    <input type="hidden" name="id" value="{{ $reporting->id }}" id="">

                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" required placeholder="Status" value="{{ $reporting->status }}" name="status" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
