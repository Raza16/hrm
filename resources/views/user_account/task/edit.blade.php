@extends('layouts.master')
@section('title', 'Tasks')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
@stop
@section('content')
@include('layouts.alert_message')
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

                 <!-- Nav tabs -->
                 <ul class="nav nav-tabs p-0 mb-3">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#view-task">View Task</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-task-update">Add Task Update</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane in active" id="view-task">
                        <div class="row">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <h6>Task Details</h6>
                            <table class="table">
                                <tr>
                                    <td><label class="text-muted">Project Name</label></td>
                                    <td><p>{{$task->project->title}}</p></td>
                                </tr>
                                <tr>
                                    <td><label class="text-muted">Task No</label></td>
                                    <td><p>{{$task->task_no}}</p></td>
                                </tr>
                                <tr>
                                    <td><label class="text-muted">Priority</label></td>
                                    <td><p>{{$task->priority}}</p></td>
                                </tr>
                                <tr>
                                    <td><label class="text-muted">Assign Date</label></td>
                                    <td><p>{{$task->assign_date ? date('j F, Y', strtotime($task->assign_date)) : null}}</p></td>
                                </tr>
                                <tr>
                                    <td><label class="text-muted">Deadline Date</label></td>
                                    <td><p>{{$task->deadline_date ? date('j F, Y', strtotime($task->deadline_date)) : null}}</p></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Note</p>
                                        <p>{!!$task->note!!}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6 col-sm-12  mt-3">
                            <div class="form-group">
                                <label><b>Documents</b></label>
                                @if($task_attachment ? [] : null)
                                    @foreach ($task_attachment as $ta)
                                    <p><i class="fas fa-download" aria-hidden="true"></i>&nbsp;<a href="{{url('employee-task-download/'.$ta->id)}}">{{$ta->attachment}}</a></p>
                                    @endforeach
                                @else
                                    <small class="text-muted"><br><i>--No uploaded files--</i></small>
                                @endif
                            </div>
                        </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <form class="mt-3" action="{{url('employee-task/'.$task->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control form-control-sm">
                                            <option value="ongoing" {{$taskStatus->status == "ongoing" ? 'selected' : ''}}>Ongoing</option>
                                            <option value="in progress" {{$taskStatus->status == "in progress" ? 'selected' : ''}}>In Progress</option>
                                            <option value="completed" {{$taskStatus->status == "completed" ? 'selected' : ''}}>Completed</option>
                                        </select>
                                        @error('status')
                                            <label class="error">{{ $errors->first('status') }}</label>
                                        @enderror
                                    </div>
                                    <button type="submit" class="mt-5 btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="add-task-update">
                        {{-- <div class="row">
                        <div class="col-md-12 mt-3"> --}}

                        {{-- <hr> --}}
                        <form action="{{url('employee-task-progress/'.$task->id)}}" method="post">
                            @csrf
                        <div class="row clearfix">
                            <div class="col-md-6 mt-3">
                                <h6>Add hourly Task Progress</h6>
                                <hr>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control form-control-sm" value="{{date('Y-m-d')}}">
                                    @error('date')
                                        <label class="error">{{$errors->first('date')}}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Module</label>
                                    <select name="module" class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        @foreach ($modules as $module)
                                            <option value="{{$module->module}}">{{$module->module}}</option>
                                        @endforeach
                                    </select>
                                    @error('module')
                                        <label class="error">{{$errors->first('module')}}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Hours</label>
                                    <input type="text" name="hours" class="form-control form-control-sm" value="{{old('hours')}}">
                                    @error('hours')
                                        <label class="error">{{$errors->first('hours')}}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Note</label>
                                    <textarea name="work_detail" class="summernote">{{old('work_detail')}}</textarea>
                                    @error('work_detail')
                                        <label class="error">{{$errors->first('work_detail')}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <button type="submit" class="mt-5 btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>

@stop

@push('after-scripts')

@endpush
