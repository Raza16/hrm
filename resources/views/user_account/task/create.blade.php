@extends('layouts.master')
@section('title', 'Task Progress')
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
                <h2>Add Task Progress for Project <span class="text-danger">{{$task->project->title}}</span></h2>
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
                <form action="{{url('employee-task-progress/'.$task->id)}}" method="post">
                    @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <p><b>Task No: <span class="text-danger">{{$task->task_no}}</span></b></p>
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
{{-- <script src="{{asset('assets/js/plupload.full.min.js')}}"></script> --}}
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
