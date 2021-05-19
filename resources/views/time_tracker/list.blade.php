@extends('layouts.master')
@section('title', 'Time Tracker')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
@include('layouts.alert_message')
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
                    <table id="refresh-data" class="admin-datatable table table-hover" style="width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>Options</th>
                                {{-- <th>Day</th> --}}
                                <th>Employee</th>
                                <th>Date</th>
                                <th>Time</th>
                                {{-- <th>Check In</th>
                                <th>Check Out</th> --}}
                                <th>Hours</th>
                                {{-- <th>Break Hours</th> --}}
                                {{-- <th>Working Hours</th> --}}
                                {{-- <th>Task Time Status</th> --}}
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Options</th>
                                {{-- <th>Day</th> --}}
                                <th>Employee</th>
                                <th>Date</th>
                                <th>Time</th>
                                {{-- <th>Check In</th>
                                <th>Check Out</th> --}}
                                <th>Hours</th>
                                {{-- <th>Break Hours</th> --}}
                                {{-- <th>Working Hours</th> --}}
                                {{-- <th>Task Time Status</th> --}}
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($time_trackers as $time_tracker)
                            <tr class="show-option">
                                <td>
                                    <ul class="header-dropdown hide-option" style="list-style-type: none;padding:0;margin-top:0px;margin-bottom:0;">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size: 20px;" class="fas fa-ellipsis-h-alt"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 34px, 0px);">
                                                <li><a href="javascript:void(0);" onclick="viewBreakTimeModule({{$time_tracker->id}})">View</a></li>
                                                <li><a href="javascript:void(0);" onclick="editModule({{$time_tracker->id}})">Edit</a></li>
                                                <li>
                                                    <a href="{{url('time-tracker/'.$time_tracker->id)}}" onclick="event.preventDefault();
                                                        document.getElementById('delete').submit();">Delete</a>
                                                    <form id="delete" action="{{url('time-tracker/'.$time_tracker->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                {{-- <td>{{date('l', strtotime($time_tracker->date))}}</td> --}}
                                <td>{{$time_tracker->employee->first_name.' '.$time_tracker->employee->middle_name.' '.$time_tracker->employee->last_name}}</td>
                                <td>{{$time_tracker->date ? date('l j F, Y', strtotime($time_tracker->date)):null}}</td>
                                <td>
                                    <p style="margin:0;"><span class="text-primary">Check-In:</span><br>
                                        {{$time_tracker->checkin ? date('j F, Y | g:i a', strtotime($time_tracker->checkin)):null}}
                                    </p>
                                    <hr style="margin:0;border-top: 1px dashed #bbb8b8;">
                                    <p style="margin:0;"><span class="text-danger">Check-Out:</span><br>
                                        {{$time_tracker->checkout ? date('j F, Y | g:i a', strtotime($time_tracker->checkout)) : '-- Nil --'}}
                                    </p>
                                </td>
                                <td>
                                    <p style="margin:0;"><span class="text-primary">Total Hours:</span><br>
                                        {{$time_tracker->total_hours ?? '-- Nil --'}}
                                    </p>
                                    <hr style="margin:0;border-top: 1px dashed #bbb8b8;">
                                    <p style="margin:0;"><span class="text-danger">Break Hours:</span><br>
                                        {{$time_tracker->break_hours ?? '-- Nil --'}}
                                    </p>
                                    <hr style="margin:0;border-top: 1px dashed #bbb8b8;">
                                    <p style="margin:0;"><span class="text-success">Working Hours:</span><br>
                                        {{$time_tracker->working_hours ?? '-- Nil --'}}
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modal for TimeTracker -->
                <div class="modal fade" id="checkinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Time</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form id="Edit-Checkin">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" id="id" name="id"/>
                            <div class="form-group">
                                <label><b>Check In Time</b></label>
                                <input type="text" class="form-control form-control-sm" id="checkin" name="checkin">
                            </div>
                            <div class="form-group">
                                <label><b>Check Out Time</b></label>
                                <input type="text" class="form-control form-control-sm" id="checkout" name="checkout">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop

@section('modal')
    <!-- View Modal for BreakTime -->
    <div class="modal fade" id="viewBreakTimeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">All Break Time</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form id="EditBreakTime">
            <div class="modal-body">
                @csrf
                {{-- <input type="hidden" id="id" name="id"/> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>Break Time In</th>
                            <th>Break Time Out</th>
                            <th>Total Break Time</th>
                        </tr>
                    </thead>
                    <tbody id="break-time">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    {{-- ./Break Time modal --}}
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

@push('after-scripts')
<script>
function editModule(id){
    $.get('/time-tracker/'+id+'/edit', function(timeTracker){
        $('#id').val(timeTracker.id);
        $('#checkin').val(timeTracker.checkin);
        $('#checkout').val(timeTracker.checkout);
        $('#checkinModal').modal('toggle');
    });
}

$('#Edit-Checkin').submit(function(e){
    e.preventDefault();

    let _token = $('input[name=_token]').val();
    let id = $('#id').val();
    let checkin = $('#checkin').val();
    let checkout = $('#checkout').val();

    $.ajax({
        url: "{{url('time-tracker')}}"+"/"+id,
        type: "PUT",
        data: {
            _token:_token,
            checkin:checkin,
            checkout:checkout,
        },
        success:function(response){
            $('#checkinModal').modal('toggle');
            if(alert('Time updated!')){
                window.reload();
            }

            // $('#refresh-data').fadeOut(300, function(){
            //     $("#refresh-data").fadeIn().load(location.href + " #refresh-data");
            // });
        }
    });
});

function viewBreakTimeModule(id){
$.get('/time-breaker/'+id, function(timeBreaker){
        $('#break-time').empty();
        if (timeBreaker.length > 0) {
            $.each(timeBreaker, function (index, value) {
                $('#break-time').append(
                    '<tr>'+
                    '<input type="hidden" id="id" name="id" value="'+value.id+'"/>'+
                    '<td>'+
                    '<div class="form-group">'+
                        '<label>Break In Time</label>'+
                        '<input type="text" class="form-control form-control-sm" id="breakin" name="breakin" value="'+value.breakin+'">'+
                    '</div>'+
                    '</td>'+
                    '<td>'+
                    '<div class="form-group">'+
                        '<label>Break off Time</label>'+
                        '<input type="text" class="form-control form-control-sm" id="breakout" name="breakout" value="'+value.breakout+'">'+
                    '</div>'+
                    '</td>'+
                    '<td>'+
                    '<div class="form-group">'+
                        '<label>Total Break Times</label>'+
                        '<input type="text" class="form-control form-control-sm" id="total_hours" name="total_hours" readonly value="'+value.total_hours+'">'+
                    '</div>'+
                    '</td>'
                    );
            });

            $('#viewBreakTimeModal').modal('toggle');
        }
        else{
            $('#break-time').append('<div  style="text-align:center;"><p>Break time not found</p></div>');
            $('#viewBreakTimeModal').modal('toggle');
        };

    });
}

$('#EditBreakTime').submit(function(e){
        e.preventDefault();

        let _token = $('input[name=_token]').val();
        let id = $('#id').val();
        let breakin = $('#breakin').val();
        let breakout = $('#breakout').val();

        $.ajax({
            url: "{{url('time-breaker')}}"+"/"+id,
            type: "PUT",
            data: {
                _token:_token,
                breakin:breakin,
                breakout:breakout,
            },
            success:function(response){
                $('#viewBreakTimeModal').modal('toggle');
                alert(response);
            }
        })
});

</script>
@endpush
