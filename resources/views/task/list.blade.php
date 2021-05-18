@extends('layouts.master')
@section('title', 'Task Tracker')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.24/features/searchHighlight/dataTables.searchHighlight.css"/>
@stop

@section('content')
@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>All Tasks</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('task-tracker/create')}}">Add Task</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="admin-datatable table table-hover" style="width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th >Options</th>
                                <th>project</th>
                                <th>Assign To</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Options</th>
                                <th>project</th>
                                <th>Assign To</th>
                                <th>Progress</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr class="show-option" style="height:0px;" >
                                <td>
                                    <div  class="container hide-option">
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div style="border: 0.5px solid #888888;border-radius:50px;padding:2px 0px 1px 4px;width:28px;margin-top:15px;margin-left:-5px;">
                                    <ul class="header-dropdown" style="list-style-type:none;padding:0;margin-top:1px;margin-left:2px;margin-bottom:2px;">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size: 15px;" class="fas fa-ellipsis-h-alt"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 34px, 0px);">
                                                {{-- <li><a href="javascript:void(0);" onclick="viewDetails({{$task->id}})">View</a></li> --}}
                                                <li><a href="javascript:void(0);" onclick="viewProgress({{$task->id}})">View Progress</a></li>
                                                {{-- {{url('view-task-progress/'.$task->id)}} --}}
                                                <li><a href="{{url('task-tracker/'.$task->id.'/edit')}}">Edit</a></li>
                                                <li>
                                                    <a href="{{url('task-tracker/'.$task->id)}}" onclick="event.preventDefault();
                                                        document.getElementById('delete').submit();">Delete</a>
                                                    <form id="delete" action="{{url('task-tracker/'.$task->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    {{$task->project_id ? $task->project->title : null}}<br>
                                    <small>Task No: {{$task->task_no}}</small><br>
                                    <small>Priority:
                                        @if ($task->priority == 'normal')
                                            <span class="text-primary">{{$task->priority}}</span>
                                        @elseif ($task->priority == 'medium')
                                            <span class="text-warning">{{$task->priority}}</span>
                                        @elseif ($task->priority == 'high')
                                            <span class="text-danger">{{$task->priority}}</span>
                                        @endif
                                    </small><br>
                                </td>
                                <td>
                                    {{$task->employee_id ? $task->employee->first_name.' '.$task->employee->middle_name.' '.$task->employee->last_name : null}}<br>
                                    <small>Assign Date: {{date('d F, Y', strtotime($task->assign_date))}}</small><br>
                                    <small class="text-danger">Deadline Date: {{$task->deadline_date ? date('d F, Y', strtotime($task->deadline_date)) : null }}</small>
                                </td>
                                <td>
                                    <p style="margin-bottom: -10px;"><small>{{$task->progress}}%</small></p>
                                    <div class="progress" style="margin-top:8px;background:#F7C600;border-radius:0;">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: {{$task->progress}}%;border-radius:0;"></div>
                                    </div>

                                    @if ($task->status == 'ongoing')
                                    <span class="badge badge-primary">{{$task->status}}</span>
                                    @elseif ($task->status == 'pending')
                                        <span class="badge badge-danger">{{$task->status}}</span>
                                    @elseif ($task->status == 'in progress')
                                        <span class="badge badge-warning">{{$task->status}}</span>
                                    @elseif($task->status == 'completed')
                                        <span class="badge badge-success">{{$task->status}}</span>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel">Task Details</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <table class="table" style="height:0px;">
                    <tr>
                        <td class="table-style text-muted">Project</td>
                        <td id="project" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Employee</td>
                        <td id="employee" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Task No</td>
                        <td id="task_no" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Priority</td>
                        <td id="priority" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Assign Date</td>
                        <td id="assign_date" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Deadline Date</td>
                        <td id="deadline_date" class="table-style"></td>
                    </tr>
                    <tr>
                        <td class="table-style text-muted">Status</td>
                        <td id="status" class="table-style"></td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
        </div>
@endsection


@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.24/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
<script src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop

@push('after-scripts')

<script>
function viewDetails(id){
    $.get('/task/'+id, function(task){
        $('#id').html(task.id);
        $('#project').html(task.project_id);
        $('#employee').html(task.employee_id);
        $('#task_no').html(task.task_no);
        $('#priority').html(task.priority);
        $('#assign_date').html(task.assign_date);
        $('#deadline_date').html(task.deadline_date);
        $('#status').html(task.status);
        $('#showModal').modal('toggle');
    });
}

function viewProgress(id){
    $.get('/check-view-progress/'+id, function(checkViewProgress){
        if(checkViewProgress.title)
        {
            window.location.href = "{{url('/view-task-progress')}}"+"/"+id;
        }
        else{
            alert('No task progress submit yet');
        }
    });
}

</script>
@endpush
