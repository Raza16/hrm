@extends('layouts.master')
@section('title', 'Task')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/fileuploader/font/font-fileuploader.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fileuploader/jquery.fileuploader.min.css')}}">
@stop

@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Add Task</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('task')}}">All Task</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="form_validation" action="{{url('task')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Project Title</label>
                            <select name="project_id" class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                @foreach ($projects as $project)
                                    <option value="{{$project->id}}" {{old('project_id') == $project->id ? 'selected':null}}>{{$project->title}}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                                <label class="error">{{$errors->first('project_id')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Assign To Employee</label>
                            <select name="employee_id" class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}" {{old('employee_id') == $employee->id ? 'selected':null}}>{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                <label class="error">{{$errors->first('employee_id')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Task No</label>
                            <input type="text" name="task_no" class="form-control form-control-sm" value="{{$newTaskNo}}" readonly>
                            @error('task_no')
                            <label class="error">{{$errors->first('task_no')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Priority</label>
                            <select name="priority" class="form-control">
                                <option value="normal">Normal</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                            @error('priority')
                                <label class="error">{{$errors->first('priority')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Assign Date</label>
                            <input type="date" name="assign_date" class="form-control form-control-sm" value="{{date('Y-m-d')}}">
                            @error('assign_date')
                                <label class="error">{{$errors->first('assign_date')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Deadline Date</label>
                            <input type="date" name="deadline_date" class="form-control form-control-sm" value="{{old('deadline_date')}}">
                            @error('deadline_date')
                                <label class="error">{{$errors->first('deadline_date')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control form-control-sm">
                                <option value="pending">Pending</option>
                                <option value="in progress">In Progress</option>
                                <option value="ongoing">Ongoing</option>
                            </select>
                            @error('status')
                                <label class="error">{{$errors->first('status')}}</label>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Note</label>
                            <textarea name="note" class="summernote">{{old('note')}}</textarea>
                            @error('note')
                                <label class="error">{{$errors->first('note')}}</label>
                            @enderror
                        </div>

                        <div class="form-group" class="hide-text" id='hide-copyright'>
                            <label>File Attachment</label>
                            <input type="file" name="attachment" multiple id="fileuploader"/>
                        </div>

                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <button type="submit" class="mt-5 btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop


@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>
<script src="{{asset('assets/plugins/fileuploader/jquery.fileuploader.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/form-validation.js')}}"></script>
@stop

@push('after-scripts')
<script>
// enable fileuploader plugin
$('#fileuploader').fileuploader({
        addMore: true
    });

</script>
@endpush
