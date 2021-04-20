@extends('layouts.master')
@section('title', 'Dashboard')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-blue">
                <h4 class="m-t-0 m-b-0">{{$totalEmployees}}</h4>
                <p class="m-b-0">Total Employees</p>
                <div class="sparkline" data-type="line" data-spot-radius="1" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(0, 150, 136)" data-spot-color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="40px" data-line-width="2" data-line-color="#ffffff" data-fill-color="transparent"><canvas width="177" height="40" style="display: inline-block; width: 177.25px; height: 40px; vertical-align: top;"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-purple">
                <h4 class="m-t-0 m-b-0">{{$totalClients}}</h4>
                <p class="m-b-0 ">Total Clients</p>
                <div class="sparkline" data-type="line" data-spot-radius="1" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(0, 150, 136)" data-spot-color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="42px" data-line-width="2" data-line-color="#ffffff" data-fill-color="transparent"><canvas width="177" height="42" style="display: inline-block; width: 177.25px; height: 42px; vertical-align: top;"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-green">
                <h4 class="m-t-0 m-b-0">{{$totalProjects}}</h4>
                <p class="m-b-0 ">Total Project</p>
                <hr>
                <small>Ongoing Project: {{$processProjects}}</small><br>
                <small>Pending Project: {{$pendingProjects}}</small><br>
                <small>Completed Project: {{$completedProjects}}</small><br>
                <div class="sparkline" data-type="line" data-spot-radius="1" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(0, 150, 136)" data-spot-color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="45px" data-line-width="2" data-line-color="#ffffff" data-fill-color="transparent"><canvas width="177" height="45" style="display: inline-block; width: 177.25px; height: 45px; vertical-align: top;"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body xl-pink">
                <h4 class="m-t-0 m-b-0">{{$totalTasks}}</h4>
                <p class="m-b-0">Total Tasks</p>
                <hr>
                <small>Ongoing Task: {{$totalTasksOngoing}}</small><br>
                <small>Completed Task: {{$totalTasksCompleted}}</small><br>
                <div class="sparkline" data-type="line" data-spot-radius="1" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(0, 150, 136)" data-spot-color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="45px" data-line-width="2" data-line-color="#ffffff" data-fill-color="transparent"><canvas width="177" height="45" style="display: inline-block; width: 177.25px; height: 45px; vertical-align: top;"></canvas></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Ongoing Task</h2>
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
                <div class="table-responsive">
                    <table class="admin-datatable table table-hover" style="width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>Employee</th>
                                <th>Project Title</th>
                                <th>Task No</th>
                                <th>Priority</th>
                                <th>Assign Date</th>
                                <th>Deadline Date</th>
                                <th>Status</th>
                                {{-- <th>Options</th> --}}
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Project Title</th>
                                <th>Task No</th>
                                <th>Priority</th>
                                <th>Assign Date</th>
                                <th>Deadline Date</th>
                                <th>Status</th>
                                {{-- <th>Options</th> --}}
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ongoingTasks as $ongoingTask)
                            <tr>
                                <td>
                                    {{$ongoingTask->employee->first_name.' '.$ongoingTask->employee->middle_name.' '.$ongoingTask->employee->last_name ?? null}}
                                </td>
                                <td>
                                    {{$ongoingTask->project->title ?? null}}
                                </td>
                                <td>{{$ongoingTask->task_no}}</td>
                                @if ($ongoingTask->priority == 'normal')
                                <td><span class="badge badge-primary">{{$ongoingTask->priority}}</span></td>
                                @elseif ($ongoingTask->priority == 'medium')
                                <td><span class="badge badge-warning">{{$ongoingTask->priority}}</span></td>
                                @elseif ($ongoingTask->priority == 'high')
                                <td><span class="badge badge-danger">{{$ongoingTask->priority}}</span></td>
                                @endif
                                <td>{{$ongoingTask->assign_date ? \Carbon\Carbon::parse($ongoingTask->assign_date)->format('j F, Y') : null}}</td>
                                <td>{{$ongoingTask->deadline_date ? \Carbon\Carbon::parse($ongoingTask->deadline_date)->format('j F, Y') : null}}</td>
                                <td>
                                    @if ($ongoingTask->status == 'ongoing')
                                        <span class="badge badge-primary">{{$ongoingTask->status}}</span>
                                    @elseif($ongoingTask->status == 'completed')
                                        <span class="badge badge-success">{{$ongoingTask->status}}</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    <div style="display: flex;">
                                        <a href="" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a>
                                        <form action="" method="post">
                                            @csrf
                                            <button type="submit"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td> --}}
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
@section('page-script')
<script src="{{asset('assets/bundles/countTo.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/sparkline.js')}}"></script>

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
