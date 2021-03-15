@extends('backend/layouts/master')

@section('title', 'Task Progress | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Task Progress for Project <span style="color:red;">{{$task->project->title}}</span></h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('employee-task-progress/'.$task->id)}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <p><b>Task No: <span style="color:red;">{{$task->task_no}}</span></b></p>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control" value="{{$todayDate}}">
                                                    @error('date')
                                                        <p><small class="text-danger">{{ $errors->first('date') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Module</label>
                                                    {{-- <input type="text" name="module" class="form-control" value="{{old('module')}}"> --}}
                                                    <select name="module" class="form-control">
                                                        @foreach ($modules as $module)
                                                            <option value="{{$module->module}}">{{$module->module}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('module')
                                                        <p><small class="text-danger">{{ $errors->first('module') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Hours</label>
                                                    <input type="text" name="hours" class="form-control" value="{{old('hours')}}">
                                                    @error('hours')
                                                        <p><small class="text-danger">{{ $errors->first('hours') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Work Detail</label>
                                                    <textarea rows="8" name="work_detail" class="form-control">{{old('work_detail')}}</textarea>
                                                    @error('work_detail')
                                                        <p><small class="text-danger">{{ $errors->first('work_detail') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ./row --}}
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('employee-task')}}" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                        {{-- /row --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
