@extends('backend/layouts/master')

@section('title', 'Task | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">All Tasks</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            <a class="btn btn-sm btn-secondary mr-1" href="{{url('task/create')}}">Add Task</a>
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>project</th>
                                                    <th>Employee</th>
                                                    <th>Task No</th>
                                                    <th>Priority</th>
                                                    <th>Assign Date</th>
                                                    <th>Deadline Date</th>
                                                    <th>Status</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-hover ">
                                                @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>
                                                            @if ($task->project->title)
                                                                {{$task->project->title}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($task->employee->first_name)
                                                                {{$task->employee->first_name.' '.$task->employee->middle_name.' '.$task->employee->last_name}}
                                                            @endif
                                                        </td>
                                                        <td>{{$task->task_no}}</td>
                                                        <td>
                                                            @if ($task->priority == 'normal')
                                                                <span class="tag tag-primary ml-0 mr-0">{{$task->priority}}</span>
                                                            @elseif($task->priority == 'medium')
                                                                <span class="tag tag-warning ml-0 mr-0">{{$task->priority}}</span>
                                                            @elseif($task->priority == 'high')
                                                                <span class="tag tag-success ml-0 mr-0">{{$task->priority}}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{$task->assign_date ? \Carbon\Carbon::parse($task->assign_date)->format('j F, Y') : null}}
                                                        </td>
                                                        <td>
                                                            {{$task->deadline_date ? \Carbon\Carbon::parse($task->deadline_date)->format('j F, Y') : null}}
                                                        </td>
                                                        <td>
                                                            @if ($task->status == 'ongoing')
                                                                <span class="tag tag-primary ml-0 mr-0">{{$task->status}}</span>
                                                            @elseif($task->status == 'completed')
                                                                <span class="tag tag-success ml-0 mr-0" style="background-color:#21ba45">{{$task->status}}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div style="margin-bottom:-9px;display:flex;" class="option-btn">
                                                                {{-- <a href="{{url('/cms/blog/'.$blog->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                                                <a href="{{url('task/'.$task->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;
                                                                </a>
                                                                <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>project</th>
                                                    <th>Employee</th>
                                                    <th>Task No</th>
                                                    <th>Priority</th>
                                                    <th>Assign Date</th>
                                                    <th>Deadline Date</th>
                                                    <th>Status</th>
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
