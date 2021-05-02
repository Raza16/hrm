@extends('layouts.master')
@section('title', 'Tasks')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop

{{-- @section('after-styles')
<style>
    tr td{
    padding: 0 !important;
    margin: 0 !important;
    }
</style>
@endsection --}}

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>All Tasks</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('task/create')}}">Add Task</a></li>
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
                                <th>project</th>
                                <th>Assign To</th>
                                <th>Progress</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>project</th>
                                <th>Assign To</th>
                                <th>Progress</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td id="hide-option">
                                    {{$task->project_id ? $task->project->title : null}}<br>



                                    <ul class="header-dropdown" id="show-option" style="visibility:hidden;list-style-type: none;padding: 0;margin-top: 10px;">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i data-toggle="tooltip" data-placement="top" title="Options" style="font-size: 15px;" class="fas fa-ellipsis-h-alt"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 34px, 0px);">
                                                <li><a href="javascript:void(0);">View</a></li>
                                                <li><a href="javascript:void(0);">Edit</a></li>
                                                <li><a href="javascript:void(0);">Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>


                                </td>
                                <td>
                                    {{$task->employee_id ? $task->employee->first_name.' '.$task->employee->middle_name.' '.$task->employee->last_name : null}}
                                </td>
                                <td>
                                    <p style="margin-bottom: -10px;"><small>{{$task->progress}}%</small></p>
                                    <div class="progress" style="margin-top:8px;background:#F7C600;border-radius:0;">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: {{$task->progress}}%;border-radius:0;"></div>
                                    </div>
                                </td>
                                <td>
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

                                <td>
                                    <div style="display: flex;">
                                        <a href="javascript:void(0)" onclick="viewDetails({{$task->id}})" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a>

                                        <a href="{{url('task/'.$task->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>

                                        <form action="{{url('task/'.$task->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
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
                <table class="table">
                    <tr>
                        <th>Project</th>
                        <td><p id="project"></p></td>
                    </tr>
                    <tr>
                        <th>Employee</th>
                        <td><p id="employee"></p></td>
                    </tr>
                    <tr>
                        <th>Task No</th>
                        <td><p id="task_no"></p></td>
                    </tr>
                    <tr>
                        <th>Priority</th>
                        <td><p id="priority"></p></td>
                    </tr>
                    <tr>
                        <th>Assign Date</th>
                        <td><p id="assign_date"></p></td>
                    </tr>
                    <tr>
                        <th>Deadline Date</th>
                        <td><p id="deadline_date"></p></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><p id="status"></p></td>
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

$('#hide-option').hover(function(){
    $('#show-option').css('visibility', 'visible');
},
function () {
    $('#show-option').css('visibility', 'hidden');
    }
);


</script>

@endpush
