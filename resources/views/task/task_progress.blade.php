@extends('layouts.master')
@section('title', 'Task Progress')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                {{-- <h2>Task Reports {{$assignTo->employee->first_name}}</h2> --}}
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                           <li><a href="{{url('task')}}">All Task</a></li>
                           <li><a href="{{url('task/create')}}">Add Task</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h5><span class="text-muted">Project: </span>
                    @if ($viewTaskProgress->title)
                        {{$viewTaskProgress->title}}
                    @endif
                </h5>
                <p><span class="text-muted">Assign To:</span> {{$viewTaskProgress->first_name.' '.$viewTaskProgress->middle_name.' '.$viewTaskProgress->last_name}}</p>
                <p><span class="text-muted">Task No:</span> {{$viewTaskProgress->task_no}}</p>
                <p><span class="text-muted">Assign Date:</span> {{date('l d F, Y', strtotime($viewTaskProgress->assign_date))}}</p>
                <p><span class="text-muted">Deadline Date:</span> {{date('l d F, Y', strtotime($viewTaskProgress->deadline_date))}}</p>
                {{-- <p><span class="text-muted">Priority:</span> {{$viewTaskProgress->deadline_date}}</p> --}}
                <p style="margin:0;"><span class="text-muted">Priority:</span>
                    @if ($viewTaskProgress->priority == 'normal')
                        <span class="badge badge-primary">{{$viewTaskProgress->priority}}</span>
                    @elseif ($viewTaskProgress->priority == 'medium')
                        <span class="badge badge-warning">{{$viewTaskProgress->priority}}</span>
                    @elseif ($viewTaskProgress->priority == 'high')
                        <span class="badge badge-danger">{{$viewTaskProgress->priority}}</span>
                    @endif
                </p>
                <br>

                {{-- <p><span class="text-muted">Status:</span> {{$viewTaskProgress->status}}</p> --}}
                <p style="margin:0;"><span class="text-muted">Status:</span>
                    @if ($viewTaskProgress->status == 'in progress')
                        <span class="badge badge-warning">{{$viewTaskProgress->status}}</span>
                    @elseif ($viewTaskProgress->status == 'ongoing')
                        <span class="badge badge-primary">{{$viewTaskProgress->status}}</span>
                    @elseif ($viewTaskProgress->status == 'completed')
                        <span class="badge badge-success">{{$viewTaskProgress->status}}</span>
                    @endif
                </p>
                <br>

                <div style="display:flex;">
                    <p><span class="text-muted">Task Progress({{$viewTaskProgress->progress}}%):</span></p>
                    <span>
                        <div class="progress" style="margin-top:8px;margin-left:10px;background:#F7C600;border-radius:0;width: 200px;">
                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: {{$viewTaskProgress->progress}}%;border-radius:0;"></div>
                        </div>
                    </span>
                </div>
                {{-- <br> --}}

                @foreach ($viewWorkDetail as $vtp)
                <ul class="list-unstyled activity">
                    <li class="a_contact">
                        <h4><span class="text-muted">Submit Date: </span>{{date('l d F, Y', strtotime($vtp->date))}}</h4>
                        <br>
                        <p style="margin:0;"><span class="text-muted">Hour:</span> {{$vtp->hours}}</p><br>
                        <p style="margin:0;"><span class="text-muted">Module:</span> {{$vtp->module}}</p><br>
                        <p style="margin:0;"><span class="text-muted">Work Detail:</span><br> {!! $vtp->work_detail !!}</p><br>
                    </li><br>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
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
