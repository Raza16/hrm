@extends('layouts.master')
@section('title', 'Profile')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
@stop
@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <img src="{{$employee->profile_image ? asset('img/profile-images/'.Auth::user()->employee->profile_image) : asset('img/no_image.png') }}" class="rounded-circle shadow" alt="profile-image">
                <h4 class="m-t-10"></h4>
                <div class="row">
                    <div class="col-12">
                        {{-- <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul> --}}
                        <h5>{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</h5>
                        <p class="text-muted">{{$employee->address}}</p>
                        {{-- <small class="text-muted">Email address: </small> --}}
                        <p class="text-muted">{{$employee->email}}</p>
                        {{-- <hr> --}}
                        {{-- <small class="text-muted">Phone: </small> --}}
                        <p class="text-muted">{{$employee->mobile_no}}</p>
                    </div>
                    {{-- <div class="col-4">
                        <small>Following</small>
                        <h5>852</h5>
                    </div>
                    <div class="col-4">
                        <small>Followers</small>
                        <h5>13k</h5>
                    </div>
                    <div class="col-4">
                        <small>Post</small>
                        <h5>234</h5>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="card">
            <div class="body">
                <small class="text-muted">Email address: </small>
                <p>{{$employee->email}}</p>
                <hr>
                <small class="text-muted">Phone: </small>
                <p>{{$employee->mobile_no}}</p>
            </div>
        </div> --}}
    </div>

    <div class="col-lg-8 col-md-12">
        <div class="card" style="margin-bottom:0;">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card w_data_1">
                       <div class="body">
                            <div class="w_icon green"><i class="fal fa-clock"></i></div>
                            <h4 class="mt-3">{{$totalAttendanceCurrentMonth}}</h4>
                            <span class="text-muted">Total Monthly Attendance</span>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card w_data_1">
                       <div class="body">
                            <div class="w_icon cyan"><i class="fas fa-calendar"></i></div>
                            <h4 class="mt-3">{{$leaveCount}}/14 days</h4>
                            <span class="text-muted">Leaves</span>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card w_data_1">
                       <div class="body">
                            <div class="w_icon dark"><i class="fas fa-tasks"></i></div>
                            <h4 class="mt-3"></h4>
                            <span class="text-muted">Tasks</span><br>
                            <span class="mb-0">Ongoing {{$processTaskCount}}</span><br>
                            <span class="mb-0">Completed {{$completedTaskCount}}</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Time Tracker</h2>
            </div>
            <div class="body">
                <div class="row">


                <div class="col-md-6">
                <span class="mb-2">Current Date Time: <span style="color:red;" id="ct6"></span></span>
                <div style="display:flex;" class="mt-3 mb-5">
                    @if (!$checkinDone)
                        <form action="{{url('checkin')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Check In</button>
                        </form>&nbsp;

                    @elseif($checkinDone && !$breakinDone)
                        <form action="{{url('breakin')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Break</button>
                        </form>&nbsp;

                        <form action="{{url('checkout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Check Out</button>
                        </form>&nbsp;

                    @elseif($breakinDone && $checkinDone)
                        <form action="{{url('breakout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Break Off</button>
                        </form>
                    @endif
                </div>
                </div>

                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Break In</th>
                            <th>Break Off</th>
                            <th>Total Hours</th>
                        </tr>
                        @foreach ($todayBreakTime as $row)
                        <tr>
                            <td>{{$row->breakin}}</td>
                            <td>{{$row->breakout}}</td>
                            <td>{{$row->total_hours}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>


            </div>
            </div>

    </div>
</div>
<div class="row">
    <div class="card">
        <div class="header">
            <h2>Time Tracker</h2>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="emp-timetracker-datatable table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Total Hours</th>
                            <th>Break Hours</th>
                            <th>Working Hours</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Total Hours</th>
                            <th>Break Hours</th>
                            <th>Working Hours</th>
                            <th>Options</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($employeeTimes as $employeeTime)
                        <tr>
                            <td>{{$employeeTime->id}}</td>
                            <td>{{$employeeTime->date ? date('j F, Y', strtotime($employeeTime->date)):null}}</td>
                            <td>{{$employeeTime->checkin ? date('j F, Y | g:i a', strtotime($employeeTime->checkin)):null}}</td>
                            <td>{{$employeeTime->checkout ? date('j F, Y | g:i a', strtotime($employeeTime->checkout)):null}}</td>
                            <td>{{$employeeTime->total_hours ? $employeeTime->total_hours : null}}</td>
                            <td>{{$employeeTime->break_hours ? $employeeTime->break_hours : null}}</td>
                            <td>{{$employeeTime->working_hours ? $employeeTime->working_hours : null}}</td>
                            <td>
                                <div style="display: flex;">
                                    {{-- <a href="" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a> --}}
                                    <a href="javascript:void(0)" onclick="showModule({{$employeeTime->id}})"class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View Break Times"><i class="far fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="card">
    <div class="header">
        <h2>Ongoing Tasks</h2>
        <ul class="header-dropdown">
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                <ul class="dropdown-menu dropdown-menu-right">
                   <li><a href="{{url('employee-task')}}">All Task</a></li>
                </ul>
            </li>
            <li class="remove">
                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
            </li>
        </ul>
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="emp-task-datatable table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Project Title</th>
                        <th>Task No</th>
                        <th>Priority</th>
                        <th>Assign Date</th>
                        <th>Deadline Date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Project Title</th>
                        <th>Task No</th>
                        <th>Priority</th>
                        <th>Assign Date</th>
                        <th>Deadline Date</th>
                        <th>Options</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($ongoingTasks as $ongoingTask)
                        <tr>
                            <td>{{$ongoingTask->project->title}}</td>
                            <td>{{$ongoingTask->task_no}}</td>
                            <td>{{$ongoingTask->priority}}</td>
                            <td>{{$ongoingTask->assign_date ? \Carbon\Carbon::parse($ongoingTask->assign_date)->format('j F, Y') : null}}</td>
                            <td>{{$ongoingTask->deadline_date ? \Carbon\Carbon::parse($ongoingTask->deadline_date)->format('j F, Y') : null}}</td>
                            <td>
                                <div style="display: flex;">
                                    <a href="{{url('employee-task/'.$ongoingTask->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View Task"><i class="far fa-eye"></i></a>

                                    <a href="{{url('employee-task-progress/'.$ongoingTask->id.'/task-progress')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Submit Task Progress"><i class="fas fa-tasks"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- <div class="card">
    <div class="body">
        <div id="calendar"></div>
    </div>
</div> --}}

</div>

@stop



@section('page-script')
<script src="{{asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/medias/image-gallery.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar/calendar.js')}}"></script>

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

function showModule(id){
    $.get('/timebreaker/'+id, function(viewTimeTracker){
        $('#break-time').empty();
        if (viewTimeTracker.length > 0) {
            // div_no_data.style.display = 'none';
            $.each(viewTimeTracker, function (index, value) {
                $('#break-time').append('<tr>' +
                    '<td>' + value.breakin  + '</td>' +
                    '<td>' + value.breakout + '</td>' +
                    '<td>' + value.total_hours + '</td>' +
                    '</tr>');
            });

            $('#viewModal').modal('toggle');
        };

    });
}

</script>

<script>
    function display_ct6() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
        hours = x.getHours( ) % 12;
        hours = hours ? hours : 12;
        var x1 = x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
        x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
        document.getElementById('ct6').innerHTML = x1;
        display_c6();
        }
        function display_c6(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct6()',refresh)
        }
    display_c6();
</script>
@endpush
