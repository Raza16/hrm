@extends('layouts.master')
@section('title', 'Tasks')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>View Tasks</h2>
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
                <div class="row">


                <div class="col-md-6 col-sm-12">
                    <label>Project Name</label>
                    <p><b>{{$task->project->title}}</b></p>
                    <p>Task No</p>
                    <p><b>{{$task->task_no}}</b></p>
                    <p>Priority</p>
                    <p><b>{{$task->priority}}</b></p>
                    <p>Assign Date</p>
                    <p><b>{{$task->assign_date ? date('j F, Y', strtotime($task->assign_date)) : null}}</b></p>
                    <p>Deadline Date</p>
                    <p><b>{{$task->deadline_date ? date('j F, Y', strtotime($task->deadline_date)) : null}}</b></p>
                    <p>Note</p>
                    <p><b>{!!$task->note!!}</b></p>

                    <form action="{{url('employee-task/'.$task->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control form-control-sm">
                                    <option value="ongoing" {{$taskStatus->status == "ongoing" ? 'selected' : ''}}>Ongoing</option>
                                    <option value="completed" {{$taskStatus->status == "completed" ? 'selected' : ''}}>Completed</option>
                            </select>
                            @error('status')
                                <label class="error">{{ $errors->first('status') }}</label>
                            @enderror
                        </div>
                        <button type="submit" class="mt-5 btn btn-primary">Save Changes</button>
                    </form>

                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Documents</label>
                        <p><i class="fas fa-download" aria-hidden="true"></i>&nbsp;<a href="{{url('employee-task/'.$task->id)}}">{{$task->document}}</a></p>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')

@stop
