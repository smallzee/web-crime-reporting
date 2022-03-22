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

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Reporter Name</th>
                            <th>Reporter Mobile-No</th>
                            <th>Crime Category</th>
                            <th>Crime Code</th>
                            <th>Crime Committed</th>
                            <th>Crime Report Address</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Reporter Name</th>
                            <th>Reporter Mobile-No</th>
                            <th>Crime Category</th>
                            <th>Crime Code</th>
                            <th>Crime Committed</th>
                            <th>Crime Report Address</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\Reporting::orderBy('id','desc')->get() as $value)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $value->reporter_name }}</td>
                                <td>{{ $value->reporter_mobile }}</td>
                                <td>{{ $value->category->name }}</td>
                                <td>{{ $value->category->crime_code }}</td>
                                <td>{{ $value->offence }}</td>
                                <td>{{ $value->offence_location }}</td>
                                <td>
                                    <a href="{{url('admin/view-report/'.$value->id)}}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
