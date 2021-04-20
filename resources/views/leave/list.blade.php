@extends('layouts.master')
@section('title', 'Leave')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
@include('layouts.alert_message')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>All Leave</h2>
                <ul class="header-dropdown">
                    {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);"></a></li>
                        </ul>
                    </li> --}}
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="admin-datatable table table-hover" style="width:100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($leaves as $leave)
                            <tr>
                                <td>{{$leave->employee_id ? $leave->employee->first_name.' '.$leave->employee->middle_name.' '.$leave->employee->last_name : null}}</td>
                                <td>{{$leave->leave_type}}</td>
                                <td>{{\Carbon\Carbon::parse($leave->from_date)->format('j F, Y')}}</td>
                                <td>{{\Carbon\Carbon::parse($leave->to_date)->format('j F, Y')}}</td>
                                <td>
                                    @if ($leave->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>

                                    @elseif($leave->status == 'approved')
                                        <span class="badge badge-success">Approved</span>

                                    @elseif($leave->status == 'rejected')
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>{!!$leave->reason!!}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="{{url('leave-list/'.$leave->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a>
                                        <form action="{{url('leave-list/'.$leave->id)}}" method="post">
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
