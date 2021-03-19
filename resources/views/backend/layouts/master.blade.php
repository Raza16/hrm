<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="{{asset('img/datech.ico')}}" type="image/x-icon"/>

<title>@yield('title')</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" /> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css"/>

<link rel="stylesheet" href="{{asset('css/aksFileUpload.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('assets/plugins/charts-c3/c3.min.css')}}"/>

<!-- Core css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/theme1.css')}}"/>

<!-- Select2 css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

{{-- custom css for whole project --}}
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>


{{-- blog featured image css --}}
<link
    rel="stylesheet"
    type="text/css"
    href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
/>

</head>

<body class="font-opensans">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href=""><i><img src="{{asset('img/favicon1.png')}}"/></i></a>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">DA Tech <a href="javascript:void(0)" class="menu_option float-right"><i class="fa fa-th" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
            <li class="g_heading">Main Navigation</li>

            {{-- --------------- Role Admin------------- --}}
            @if(Auth::user()->role_id == 1)
            <li class="{{request()->is('admin/dashboard') ? 'active' : null}}">
                <a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
            </li>

            <li class="{{request()->is('employee') || request()->is('employee/create')  ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user"></i><span>Employee</span></a>
                <ul>
                    <li class="{{request()->is('employee') ? 'active' : null}}"><a href="{{url('employee')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Employees</a></li>
                    <li class="{{request()->is('employee/create') ? 'active' : null}}"><a href="{{url('employee/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Employee</a></li>
                </ul>
            </li>

            <li class="{{request()->is('client') || request()->is('client/create') || request()->is('client-invoice/create')  ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-users"></i><span>Clients</span></a>
                <ul>
                    <li class="{{request()->is('client') ? 'active' : null}}"><a href="{{url('client')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Clients</a></li>
                    <li class="{{request()->is('client/create') ? 'active' : null}}"><a href="{{url('client/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Client</a></li>
                    <li class="{{request()->is('client-invoice') ? 'active' : null}}"><a href="{{url('client-invoice')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Invoices List</a></li>
                    <li class="{{request()->is('client-invoice/create') ? 'active' : null}}"><a href="{{url('client-invoice/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Invoice</a></li>
                </ul>
            </li>

            <li class="{{request()->is('project') || request()->is('project/create')  ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-suitcase"></i><span>Projects</span></a>
                <ul>
                    <li class="{{request()->is('project') ? 'active' : null}}"><a href="{{url('project')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Projects</a></li>
                    <li class="{{request()->is('project/create') ? 'active' : null}}"><a href="{{url('project/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Project</a></li>
                </ul>
            </li>
            <li class="{{request()->is('task') || request()->is('task/create') || request()->is('task-report') || request()->is('task-module')  ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-tasks"></i><span>Tasks Tracker</span></a>
                <ul>
                    <li class="{{request()->is('task') ? 'active' : null}}"><a href="{{url('task')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Task</a></li>
                    <li class="{{request()->is('task/create') ? 'active' : null}}"><a href="{{url('task/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Task</a></li>
                    <li class="{{request()->is('task-report') ? 'active' : null}}"><a href="{{url('task-report')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Task Report</a></li>
                    <li class="{{request()->is('task-module') ? 'active' : null}}"><a href="{{url('task-module')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Task Module</a></li>
                </ul>
            </li>

            <li class="{{request()->is('time-tracker') ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-calendar"></i><span>Attendance</span></a>
                <ul>
                    <li class="{{request()->is('time-tracker') ? 'active' : null}}"><a href="{{url('/time-tracker')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Time Tracker</a></li>
                </ul>
            </li>

            <li class="{{request()->is('leave-list') ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-file-text"></i><span>Leave</span></a>
                <ul>
                    <li class="{{request()->is('leave-list') ? 'active' : null}}"><a href="{{url('leave-list')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Leave List</a></li>
                    {{-- <li><a href="{{url('attendance')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Attendance</a></li> --}}
                </ul>
            </li>

            <li class="{{request()->is('payslip') || request()->is('payslip/create') ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-file-text"></i><span>Payroll</span></a>
                <ul>
                    <li class="{{request()->is('payslip') ? 'active' : null}}"><a href="{{url('payslip')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Payslip List</a></li>
                    <li class="{{request()->is('payslip/create') ? 'active' : null}}"><a href="{{url('payslip/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add Payslip</a></li>
                </ul>
            </li>

            <li class="{{request()->is('user') || request()->is('user/create') ? 'active' : null}}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user-plus"></i><span>User</span></a>
                <ul>
                    <li class="{{request()->is('user') ? 'active' : null}}"><a href="{{url('user')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>All Users</a></li>
                    <li class="{{request()->is('user/create') ? 'active' : null}}"><a href="{{url('user/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Add User</a></li>
                    {{-- <li><a href="{{url('role')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Role</a></li> --}}
                </ul>
            </li>
            @endif


            {{-- --------------- Role Employee------------- --}}
            @if(Auth::user()->role_id == 2)

                <li class="{{request()->is('user_account') ? 'active' : null}}">
                    <a href="{{url('/user_account')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    {{-- <ul>
                        <li><a href="{{url('employee-task')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Task List</a></li>
                    </ul> --}}
                </li>
                <li class="{{request()->is('leave') || request()->is('leave/create') ? 'active' : null}}">
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-file-text"></i><span>Leaves</span></a>
                    <ul>
                        <li class="{{request()->is('leave') ? 'active' : null}}"><a href="{{url('leave')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Leave List</a></li>
                        <li class="{{request()->is('leave/create') ? 'active' : null}}"><a href="{{url('leave/create')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Apply Leave</a></li>
                    </ul>
                </li>
                <li class="{{request()->is('employee-task') ? 'active' : null}}">
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-tasks"></i><span>Task</span></a>
                    <ul>
                        <li class="{{request()->is('employee-task') ? 'active' : null}}"><a href="{{url('employee-task')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Task List</a></li>
                    </ul>
                </li>
            @endif

            {{-- --------------- Role Manager------------- --}}
            {{-- @if(Auth::user()->role_id == 3)

            @endif --}}
            </ul>
        </nav>
    </div>

    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa fa-align-left"></i></a>
                        <h1 class="page-title"></h1>
                    </div>
                    <div class="right">
                        {{-- <div class="input-icon xs-hide mr-4">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-icon-addon"><i class="fa fa-search"></i></span>
                        </div> --}}
                        <div class="notification d-flex">
                            {{-- <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w350 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <div class="message">It is a long established fact that a reader</div>
                                                    <small>11 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Wendy Keen</span>
                                                    <div class="message">There are many variations of passages of Lorem Ipsum</div>
                                                    <small>18 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Matt Rosales</span>
                                                    <div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
                                                    <small>27 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Phillip Smith</span>
                                                    <div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
                                                    <small>33 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-body">
                                            <a href="">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div> --}}

                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="dropdown-divider"></div>
                                    {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fa fa-lock"></i> Change Password</a> --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" style="cursor:pointer;" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="dropdown-icon fa fa-sign-out"></i> Sign out</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">

        @yield('main-content')

        {{-- Footer --}}
          <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="templateshub.net">&copy; 2021 | DA Tech.</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

{{------------------ theme js files -----------------}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knobjs.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/page/project-index.js')}}"></script>

{{--------------- js files use within project -----------------}}

<script src="{{asset('js/aksFileUpload.min.js')}}"></script>

{{-- blog featured image --}}
<script src="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.js"></script>

{{-- Select 2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


{{-- Custom.js for whole project --}}
<script src="{{asset('assets/js/custom.js')}}"></script>

@stack('scripts')

{{-- Ck editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>


{{-- datatables --}}
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

</body>
</html>
