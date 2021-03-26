@extends('backend/layouts/master')

@section('title', 'Employee | Dashboard')

@section('main-content')


   <div class="container-fluid">

    @if (session('success'))
        <div id="alert" class="alert alert-success alert-dismissible fade in mb-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            <strong>Done!</strong> {{session('success')}}
        </div>
    @endif
    @if (session('logout'))
        <div class="alert alert-danger alert-dismissible in mb-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            <strong>Logout!</strong> {{session('logout')}}
        </div>
    @endif
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <div style="width:260px; height:260px; margin:24px auto 15px auto;">
                            @if($employee->profile_image)
                            <img style="max-width:100%; max-height:100%; border-radius:200px;" class="card-img-top" src="{{asset('img/profile-images/'.Auth::user()->employee->profile_image)}}" alt="Profile image">
                            @elseif(!$employee->profile_image)
                            <img class="card-img-top" src="{{asset('img/no_image.png')}}" alt="Profile image">
                            @endif
                        </div>

                        <div class="card-body">
                            <h3 class="card-title" style="font-size:20px;"><b>{{$employee->first_name." ".$employee->middle_name." ".$employee->last_name}}</b>&nbsp;<p style="font-size:15px;">{{$employee->employee_no}}</p></h3>
                            <p><b>Address</b></p>
                            <p class="card-text">{{$employee->address}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Email</b> {{$employee->email}}</li>
                                <li class="list-group-item"><b>Mobile No</b> {{$employee->mobile_no}}</li>
                                <li class="list-group-item"><b>Date of Birth</b> {{ $employee->date_of_birth ? \Carbon\Carbon::parse($employee->date_of_birth)->format('j F, Y') : null }}</li>
                            </ul>
                            {{-- <div class="card-body">
                                <a href="javascript:void(0);" class="card-link">View More</a>
                                <a href="javascript:void(0);" class="card-link">Another link</a>
                            </div> --}}
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Info</h3>
                                {{-- <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-x"></i></a>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <p><b>Gender</b> {{$employee->gender}}</p>
                                <p><b>Marital Status</b> {{$employee->marital_status}}</p>
                                <p><b>Qualification</b> {{$employee->qualification}}</p>
                                <p><b>National ID Card No</b> {{$employee->cnic}}</p>
                                <p><b>Home Phone</b> {{$employee->home_phone}}</p>
                                <p><b>Emergency Contact</b> {{$employee->emergency_contact}}</p>
                                <p><b>Other Email</b> {{$employee->other_email}}</p>
                                <p><b>Nationality</b> {{$employee->nationality}}</p>
                                <p><b>Postal/Zip Code</b> {{$employee->postal_code}}</p>
                                {{-- <ul class="right_chat list-unstyled mb-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <span class="message">Designer, Blogger</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <span class="message">Designer, Blogger</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Nancy Flanary</span>
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Phillip Smith</span>
                                                    <span class="message">Writter, Mag Editor</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body widgets1">
                                        <div class="icon">
                                            <i class="fa fa-clock-o text-warning font-30" aria-hidden="true"></i>
                                        </div>
                                        <div class="details">
                                            <h6 class="mb-0 font600">Total Attendance</h6>
                                            <span class="mb-0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body widgets1">
                                        <div class="icon">
                                            {{-- <i class="icon-heart text-warning font-30"></i> --}}
                                            <i class="fa fa-list-alt text-warning font-30" aria-hidden="true"></i>
                                        </div>
                                        <div class="details">
                                            <h6 class="mb-0 font600">Total Leaves</h6>
                                            <span class="mb-0">{{$leaveCount}}/14 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body widgets1">
                                        <div class="icon">
                                            {{-- <i class="icon-handbag text-danger font-30"></i> --}}
                                            <i class="fa fa-briefcase text-danger font-30" aria-hidden="true"></i>
                                        </div>
                                        <div class="details">
                                            <h6 class="mb-0 font600">Tasks</h6>
                                            <span class="mb-0">Ongoing {{$processTaskCount}}</span>
                                            <span class="mb-0">Completed {{$completedTaskCount}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body widgets1">
                                        {{-- <div class="icon">
                                            <i class="icon-handbag text-danger font-30"></i>
                                            <i class="fa fa-briefcase text-danger font-30" aria-hidden="true"></i>
                                        </div> --}}
                                        <div class="details">
                                            <h6 class="mb-2 font600">Time Tracker</h6>
                                            {{-- <span class="mb-2">Current Date Time: <span style="color:red;">{{$currentDateTime->format('j F, Y | g:i a')}}</span></span> --}}
                                            <span class="mb-2">Current Date Time: <span style="color:red;" id="ct6"></span></span>
                                            <br>
                                            <span class="mb-2">
                                                {{-- @if($checkinPrevious)
                                                <div class="form-group">
                                                    <form action="{{url('checkout')}}" method="POST">
                                                        @csrf
                                                        <label style="color:red;"><b>Previous checkout is missing</b></label><br>
                                                        <label>Enter you correct previous <span style="color: red;">checkout time</span> first</label>
                                                        <p>Your previous Last Checkin <span style="color: red;"> {{date('j F, Y | g:i a' ,strtotime($checkinPrevious->checkin))}}</span></p>
                                                        <input type="time" name="checkout" class="form-control" value="{{old('checkout')}}">
                                                        @error('checkout')
                                                            <p><small class="text-danger">{{ $errors->first('checkout') }}</small></p>
                                                        @enderror
                                                        <button type="submit" class="mt-2 btn btn-sm btn-primary">Submit Previous Check Out</button>
                                                    </form>
                                                </div>
                                                @else --}}
                                                <div style="display:flex;" class="mt-3">
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

                                                {{-- @endif --}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Time Tracker</h3>
                                            <div class="card-options">
                                                {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            </div>
                                        </div>

                                        <div class="table-responsive" style="padding:30px 30px;">
                                            <table class="datatable table table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Check In</th>
                                                        <th>Check Out</th>
                                                        <th>Total Hours</th>
                                                        <th>Break Hours</th>
                                                        <th>Working Hours</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employeeTimes as $employeeTime)
                                                        <tr>
                                                            <td>{{$employeeTime->date ? date('j F, Y', strtotime($employeeTime->date)):null}}</td>
                                                            <td>{{$employeeTime->checkin ? date('j F, Y | g:i a', strtotime($employeeTime->checkin)):null}}</td>
                                                            <td>{{$employeeTime->checkout ? date('j F, Y | g:i a', strtotime($employeeTime->checkout)):null}}</td>
                                                            <td>{{$employeeTime->total_hours ? $employeeTime->total_hours : null}}</td>
                                                            <td>{{$employeeTime->break_hours ? $employeeTime->break_hours : null}}</td>
                                                            <td>{{$employeeTime->working_hours ? $employeeTime->working_hours : null}}</td>
                                                            <td>
                                                                <div style="margin-bottom:-9px;display:flex;">
                                                                    @if($employeeTime->checkout == null)
                                                                    <span data-toggle="tooltip" data-original-title="Edit">
                                                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="editTime({{$employeeTime->id}})" data-original-title="Edit" data-target="#editModal"><i class="fa fa-edit"></i></a>
                                                                    </span> &nbsp;
                                                                    @endif
                                                                    <br>
                                                                    <a class="btn btn-sm btn-primary" data-toggle="tooltip" data-original-title="View Break Time" href="{{url('employee-task-progress/'.$employeeTime->id)}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        </div>
                                                                        <form id="timeFormEdit">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                            <input type="hidden" id="id" name="id"/>
                                                                            <div class="form-group">
                                                                                <label>Check In</label>
                                                                                <input type="text" name="checkin" id="checkin" class="form-control" />
                                                                                @error('checkin')
                                                                                    <p><small class="text-danger">{{ $errors->first('checkin') }}</small></p>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Check Out</label>
                                                                                <input type="text" name="checkout" id="checkout" class="form-control" />
                                                                                @error('checkout')
                                                                                    <p><small class="text-danger">{{ $errors->first('checkout') }}</small></p>
                                                                                @enderror
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
                                                                <!-- /Modal -->
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Check In</th>
                                                        <th>Check Out</th>
                                                        <th>Total Hours</th>
                                                        <th>Break Hours</th>
                                                        <th>Working Hours</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade active show">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Today Tasks</h3>
                                            <div class="card-options">
                                                {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            </div>
                                        </div>
                                        <div class="table-responsive" style="padding:30px 30px;">
                                            <table id="datatableTodaytask" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Project Title</th>
                                                        <th>Task No</th>
                                                        <th>Priority</th>
                                                        <th>Assign Date</th>
                                                        <th>Deadline Date</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-hover ">
                                                    @foreach ($todayTasks as $todayTask)
                                                        <tr>
                                                            <td>
                                                                @if ($todayTask->project->title)
                                                                {{$todayTask->project->title}}
                                                                @endif
                                                            </td>
                                                            <td>{{$todayTask->task_no}}</td>
                                                            <td>{{$todayTask->priority}}</td>
                                                            <td>{{$todayTask->assign_date ? \Carbon\Carbon::parse($todayTask->assign_date)->format('j F, Y') : null}}</td>
                                                            <td>{{$todayTask->deadline_date ? \Carbon\Carbon::parse($todayTask->deadline_date)->format('j F, Y') : null}}</td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                                   <div class="btn-group btn-group-sm" role="group">
                                                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                        <a class="dropdown-item" href="{{url('employee-task/'.$todayTask->id.'/edit')}}">View</a>
                                                                        <a class="dropdown-item" href="{{url('employee-task-progress/'.$todayTask->id.'/task-progress')}}">Submit Task Progress</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
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
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('scripts')
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

    function editTime(id){
        $.get('/timetracker/'+id, function(viewTime){
            $('#id').val(viewTime.id);
            $('#checkin').val(viewTime.checkin);
            $('#checkout').val(viewTime.checkout);
            $('#editModal').modal('toggle');
        });
    }

    $('#timeFormEdit').submit(function(e){
        e.preventDefault();

        let id = $('#id').val();
        let checkin = $('#checkin').val();
        let checkout = $('#checkout').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            url: "{{url('timetracker')}}"+"/"+id,
            type: "PUT",
            data: {
                id:id,
                checkin:checkin,
                checkout:checkout,
                _token:_token,
            },
            success:function(response){
                // $('#mid' + response.id +' td:nth-child(1)').text(response.module);
                // $('.taskmodule').text(response.module);
                $('#editModal').modal('toggle');
                alert('Record has been updated!');
                $('#timeFormEdit')[0].reset();
            }
        })
    });



</script>

@endpush
