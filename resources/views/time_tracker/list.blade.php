@extends('layouts.master')
@section('title', 'Time Tracker')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Time Tracker</h2>
                <ul class="header-dropdown">
                    {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li> --}}
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="task-datatable table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Employee</th>
                                <th>Date</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Total Hours</th>
                                <th>Break Hours</th>
                                <th>Working Hours</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Date</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Total Hours</th>
                                <th>Break Hours</th>
                                <th>Working Hours</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($time_trackers as $time_tracker)
                            <tr>
                                <td>{{$time_tracker->employee->first_name.' '.$time_tracker->employee->middle_name.' '.$time_tracker->employee->last_name}}</td>
                                <td>{{$time_tracker->date ? date('j F, Y', strtotime($time_tracker->date)):null}}</td>
                                <td>{{$time_tracker->checkin ? date('j F, Y | g:i a', strtotime($time_tracker->checkin)):null}}</td>
                                <td>{{$time_tracker->checkout ? date('j F, Y | g:i a', strtotime($time_tracker->checkout)) : null}}</td>
                                <td>{{$time_tracker->total_hours ? $time_tracker->total_hours : null}}</td>
                                <td>{{$time_tracker->break_hours ? $time_tracker->break_hours : null}}</td>
                                <td>{{$time_tracker->working_hours ? $time_tracker->working_hours : null}}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="{{url('time-tracker/'.$time_tracker->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                                        {{-- <a href="{{url('time-tracker/'.$time_tracker->id)}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a> --}}
                                        <form action="{{url('time-tracker/'.$time_tracker->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
