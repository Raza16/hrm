@extends('backend/layouts/master')

@section('title', 'Time Tracker | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Time Tracker</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            {{-- <a class="btn btn-sm btn-secondary mr-1" href="{{url('attendance/create')}}">Add Attendance</a> --}}
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
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
                                            <tbody class="table-hover">
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
                                                         <div style="margin-bottom:-9px;">
                                                            {{-- <a href="{{url('time-tracker/'.$time_tracker->id.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                                                            </a><br>
                                                            <a class="btn btn-sm btn-primary mt-1" href="{{url('employee-task-progress/'.$time_tracker->id)}}">View Break Time</a> --}}

                                                            {{-- <form action="{{url('employee-task-progress/'.$time_tracker->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </form> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
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
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
