@extends('layouts.master')
@section('title', 'Task')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<link  rel="stylesheet" href="{{asset('assets/plugins/ssi-uploader/dist/ssi-uploader/styles/ssi-uploader.min.css')}}"/>
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
                <form action="{{url('task')}}" method="post">
                    @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Project Tital</label>
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
                            <label>Note</label>
                            <textarea name="note" class="summernote">{{old('note')}}</textarea>
                            @error('note')
                                <label class="error">{{$errors->first('note')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>File Attachment</label>
                            <input type="file" name="document" multiple id="ssi-upload" accept=".docx, .doc, .pdf, .csv, .png, .jpeg, .jpg, .pptx, .xls, .xlsx"/>
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
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<script src="{{asset('assets/plugins/ssi-uploader/dist/ssi-uploader/js/ssi-uploader.min.js')}}"></script>
@stop

@push('after-scripts')
<script>
$('#ssi-upload').ssi_uploader({
    allowed: ['png', 'jpg', 'jpeg', 'pdf', 'txt', 'doc', 'docx', 'xls', 'csv', 'xlsx', 'pptx'],
    errorHandler: {
        method: function (msg, type) {
            ssi_modal.notify(type, {content: msg});
        },
        success: 'success',
        error: 'error'
    },
    maxFileSize: 122//mb
});
</script>
@endpush
