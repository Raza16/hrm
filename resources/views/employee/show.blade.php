@extends('layouts.master')
@section('title', 'Employee Profile')
@section('content')
<div class="row clearfix">
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card mcard_3">
            <div class="body">

                <a href="javascript:void(0);">

                    <img src="{{$employee->profile_image ? asset('img/profile-images/'.$employee->profile_image) : asset('img/no_image.png')}}" class="rounded-circle" alt="profile-image" width="200" height="200">
                </a>
                <h5 class="m-t-10 mt-4">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</h5>

                <div class="row">
                    <div class="col-12">
                        {{-- <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul> --}}
                        <a href="{{url('employee/'.$employee->id.'/edit')}}"><small><i class="fas fa-pencil-alt"></i> Edit</small></a>
                        <p class="text-muted mt-3">{{$employee->employee_no}}</p>
                        <p class="text-muted">{{$employee->email}}</p>
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
        <div class="card">
            <div class="body">
                {{-- <small class="text-muted">Reviews: </small>
                <p>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star"></i>
                    <i class="text-warning zmdi zmdi-star-half"></i>
                </p>
                <hr> --}}
                <p class="text-muted">Employee Info </p>
                <small class="text-muted">Date of Birth: </small>
                <p>{{$employee->date_of_birth ? date('j F, Y', strtotime($employee->date_of_birth)):null}}</p>
                <hr>
                <small class="text-muted">Gender: </small>
                <p>{{$employee->gender}}</p>
                <hr>
                <small class="text-muted">Marital Status: </small>
                <p>{{$employee->marital_status}}</p>
                <hr>
                <small class="text-muted">Qualification: </small>
                <p>{{$employee->qualification}}</p>
                <hr>
                <small class="text-muted">CNIC: </small>
                <p>{{$employee->cnic}}</p>

                {{-- <span>React and many other platforms.</span> --}}
                {{-- <hr>
                <ul class="list-unstyled">
                    <li>
                        <div>Angular</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">56% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Laravel</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-purple " role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%"> <span class="sr-only">87% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Photoshop</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"> <span class="sr-only">62% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>Wordpress</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-green " role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%"> <span class="sr-only">87% Complete</span> </div>
                        </div>
                    </li>
                    <li>
                        <div>FrontEnd</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                        </div>
                    </li>
                </ul> --}}


            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <p class="mt-3">Employee Contact Details</p>
                        <small class="text-muted">Home Phone: </small>
                        <p>{{$employee->home_phone}}</p>

                        <small class="text-muted">Emergency Contact: </small>
                        <p>{{$employee->emergency_contact}}</p>

                        <small class="text-muted">Other Email</small>
                        <p>{{$employee->other_email}}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p class="mt-3">Employee Notes</p>
                        <small class="text-muted">Note: </small>
                        <p>{!!$employee->notes!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <p class="mt-3">Employee Address</p>
                        <small class="text-muted">Country: </small>
                        <p>{{$employee->country}}</p>
                        <small class="text-muted">Province/State: </small>
                        <p>{{$employee->province_state}}</p>
                        <small class="text-muted">City: </small>
                        <p>{{$employee->city}}</p>
                        <small class="text-muted">Nationality: </small>
                        <p>{{$employee->nationality}}</p>
                        <small class="text-muted">Postal/Zip Code: </small>
                        <p>{{$employee->postal_code}}</p>
                        <small class="text-muted">Address: </small>
                        <p>{{$employee->address}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Employee Job Info</h2>
                    </div>
                    <div class="body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                <p class="mt-3">Job Info</p>

                                <small class="text-muted">Designation: </small>
                                <p>{{$employee->designation_id ? $employee->designation->title:null}}</p>

                                <small class="text-muted">Salary: </small>
                                <p>{{$employee->salary}}</p>

                                <small class="text-muted">Joining Date: </small>
                                <p>{{$employee->joining_date ? date('j F, Y', strtotime($employee->joining_date)):null}}</p>

                                <small class="text-muted">Ending Date: </small>
                                <p>{{$employee->ending_date}}</p>

                                <small class="text-muted">Supervisor: </small>
                                <p>{{$employee->employee_id ? $employee->employee->first_name.' '.$employee->employee->middle_name.' '.$employee->employee->last_name : null}}</p>

                                <small class="text-muted">Working Time Start: </small>
                                <p>{{$employee->working_time_start ? date('g:i a', strtotime($employee->working_time_start)):null}}</p>

                                <small class="text-muted">Working Time End: </small>
                                <p>{{$employee->working_time_end ? date('g:i a', strtotime($employee->working_time_end)):null}}</p>

                                <small class="text-muted text-danger">Termination Date: </small>
                                <p>{{$employee->termination_date ? date('j F, Y', strtotime($employee->termination_date)):null}}</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p class="mt-3">Employee Job Status</p>

                                <small class="text-muted">Job Status: </small>
                                <p>{{$employee->job_status}}</p>

                                @if ($employee->job_status == 'Full Time' || $employee->job_status == 'Part Time' || $employee->job_status == 'Remote')
                                <small class="text-muted">Probation Period Start: </small>
                                <p>{{$employee->probation_period_start ? date('j F, Y', strtotime($employee->probation_period_start)):null}}</p>
                                <small class="text-muted">Probation Period End: </small>
                                <p>{{$employee->probation_period_end ?  date('j F, Y', strtotime($employee->probation_period_end)):null}}</p>
                                @endif

                                @if ($employee->job_status == 'Internship')
                                <small class="text-muted">Internship Period Start: </small>
                                <p>{{$employee->internship_period_start ? date('j F, Y', strtotime($employee->internship_period_start)):null}}</p>
                                <small class="text-muted">Internship Period End: </small>
                                <p>{{$employee->probation_period_end ? date('j F, Y', strtotime($employee->internship_period_end)):null}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@stop
