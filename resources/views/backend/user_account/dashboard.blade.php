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
                                                @if($checkinPrevious)
                                                <div class="form-group">
                                                    <form action="{{url('checkout')}}" method="POST">
                                                        @csrf
                                                        <label style="color:red;"><b>Previous checkout is missing</b></label><br>
                                                        <label>Enter you correct previous <span style="color: red;">checkout time</span> first</label>
                                                        {{-- <p>{{$checkinPrevious->checkin->format('Y-m-d g:i a')}}</p> --}}
                                                        <p>Your previous Last Checkin <span style="color: red;"> {{date('j F, Y | g:i a' ,strtotime($checkinPrevious->checkin))}}</span></p>
                                                        <input type="time" name="checkout" class="form-control" value="{{old('checkout')}}">
                                                        @error('checkout')
                                                            <p><small class="text-danger">{{ $errors->first('checkout') }}</small></p>
                                                        @enderror
                                                        <button type="submit" class="mt-2 btn btn-sm btn-primary">Submit Previous Check Out</button>
                                                    </form>
                                                </div>
                                                @else
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

                                                @endif
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
                                            <table class="datatable table table-striped table-bordered" style="width:100%">
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
                                                            <td>{{$employeeTime->total_hours}}</td>
                                                            <td>{{$employeeTime->break_hours}}</td>
                                                            <td>{{$employeeTime->working_hours}}</td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                        @if($employeeTime->checkout == null)
                                                                         {{-- <a class="dropdown-item" href="{{url('time-tracker/'.$employeeTime->id.'/edit')}}">Edit</a> --}}
                                                                         <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#editModal">Edit</a>
                                                                         @endif
                                                                        <a class="dropdown-item" href="{{url('employee-task-progress/'.$employeeTime->id)}}">View Break Time</a>
                                                                        </div>
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
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label>Check In</label>
                                                                                    <input type="text" name="checkin" class="form-control" value="{{$employeeTime->checkin}}">
                                                                                    @error('checkin')
                                                                                        <p><small class="text-danger">{{ $errors->first('checkin') }}</small></p>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Check Out</label>
                                                                                    <input type="text" name="checkout" class="form-control" value="{{$employeeTime->checkout}}">
                                                                                    @error('checkout')
                                                                                        <p><small class="text-danger">{{ $errors->first('checkout') }}</small></p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Modal -->
                                                                 </div>
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
                                                                   <div class="btn-group  btn-group-sm" role="group">
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



                        {{-- <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="false">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-controls="pills-timeline" aria-selected="false">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                            </li>
                        </ul> --}}

                        {{-- <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Activity</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                            <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA <small class="float-right text-right">20-April-2019 - Today</small></span>
                                            <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar4.jpg" alt="">
                                            <span><a href="javascript:void(0);" title="">Dessie Parks</a> Oakland, CA <small class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                            <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                                <div class="timeline_img mb-20">
                                                    <img class="width100" src="assets/images/gallery/1.jpg" alt="Awesome Image">
                                                    <img class="width100" src="assets/images/gallery/2.jpg" alt="Awesome Image">
                                                </div>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 23 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample1">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                                <div class="timeline_img mb-20">
                                                                    <img class="width150" src="assets/images/gallery/7.jpg" alt="Awesome Image">
                                                                    <img class="width150" src="assets/images/gallery/8.jpg" alt="Awesome Image">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar3.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Dessie Parks <small class="float-right font-14">1min ago</small></h6>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar7.jpg" alt="">
                                            <span><a href="javascript:void(0);" title="">Rochelle Barton</a> San Francisco, CA <small class="float-right text-right">12-April-2019</small></span>
                                            <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 7 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample2">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Company</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Epic Theme">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Jane">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Pearson">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="455 S. Airport St. Moncks Corner">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="New York">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <label class="form-label">About Me</label>
                                                    <textarea rows="5" class="form-control" placeholder="Here can be your description">Oh so, your weak rhyme You doubt I'll bother, reading into it I'll probably won't, left to my own devices But that's the difference in our opinions.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new_post">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                            <div class="mt-4 text-right">
                                                <button class="btn btn-warning"><i class="icon-link"></i></button>
                                                <button class="btn btn-warning"><i class="icon-camera"></i></button>
                                                <button class="btn btn-primary">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card blog_single_post">
                                    <div class="img-post">
                                        <img class="d-block img-fluid" src="assets/images/gallery/6.jpg" alt="First slide">
                                    </div>
                                    <div class="card-body">
                                        <h4><a href="#">All photographs are accurate</a></h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                    </div>
                                    <div class="footer">
                                        <div class="actions">
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                        </div>
                                        <ul class="stats list-unstyled">
                                            <li><a href="javascript:void(0);">General</a></li>
                                            <li><a href="javascript:void(0);" class="icon-heart"> 28</a></li>
                                            <li><a href="javascript:void(0);" class="icon-bubbles"> 128</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-group card-list-group">
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <img class="media-object avatar avatar-md mr-4" src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted">4 min</small>
                                                        <h5>Peter Richards</h5>
                                                    </div>
                                                    <div>
                                                        Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras
                                                        justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes,
                                                        nascetur ridiculus mus.
                                                    </div>
                                                    <ul class="media-list">
                                                        <li class="media mt-4">
                                                            <img class="media-object avatar mr-4" src="assets/images/xs/avatar1.jpg" alt="">
                                                            <div class="media-body">
                                                                <strong>Debra Beck: </strong>
                                                                Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                                                                auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card blog_single_post">
                                    <div class="img-post">
                                        <img class="d-block img-fluid" src="assets/images/gallery/4.jpg" alt="First slide">
                                    </div>
                                    <div class="card-body">
                                        <h4><a href="#">All photographs are accurate</a></h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                    </div>
                                    <div class="footer">
                                        <div class="actions">
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                        </div>
                                        <ul class="stats list-unstyled">
                                            <li><a href="javascript:void(0);">General</a></li>
                                            <li><a href="javascript:void(0);" class="icon-heart"> 28</a></li>
                                            <li><a href="javascript:void(0);" class="icon-bubbles"> 128</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-group card-list-group">
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <img class="media-object avatar avatar-md mr-4" src="assets/images/xs/avatar7.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted">12 min</small>
                                                        <h5>Peter Richards</h5>
                                                    </div>
                                                    <div>
                                                        Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis
                                                        parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-5">
                                            <div class="media">
                                                <img class="media-object avatar avatar-md mr-4" src="assets/images/xs/avatar6.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <small class="float-right text-muted">34 min</small>
                                                        <h5>Peter Richards</h5>
                                                    </div>
                                                    <div>
                                                        Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                                                        venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                                    </div>
                                                    <ul class="media-list">
                                                        <li class="media mt-4">
                                                            <img class="media-object avatar mr-4" src="assets/images/xs/avatar5.jpg" alt="">
                                                            <div class="media-body">
                                                                <strong>Wayne Holland: </strong>
                                                                Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                                                                auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

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
    display_c6()
</script>

@endpush
