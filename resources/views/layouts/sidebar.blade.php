<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar" style="font-family: 'Inter', san-serif;">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        {{-- {{route('dashboard.index')}} --}}
        <a href="#"><img src="{{asset('img/datech-logo.png')}}" width="25" alt="DA Tech"><span class="m-l-10">DA Tech</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a href="#" class="image">
                        @if (Auth::user()->role_id == 1)
                        <img src="{{asset('img/no_image.png')}}" alt="Profile-Photo" />
                        @elseif (Auth::user()->role_id == 2 && Auth::user()->employee->profile_image)
                        <img src="{{asset('storage/profile_images/'.Auth::user()->employee->profile_image)}}" alt="Profile-Photo" width="" />
                        @elseif (Auth::user()->role_id == 3 && Auth::user()->employee->profile_image)
                        <img src="{{asset('storage/profile_images/'.Auth::user()->employee->profile_image)}}" alt="Profile-Photo" width="" />
                        @elseif (Auth::user()->role_id == 4 && Auth::user()->employee->profile_image)
                        <img src="{{asset('storage/profile_images/'.Auth::user()->employee->profile_image)}}" alt="Profile-Photo" width="" />
                        @else
                        <img src="{{asset('img/no_image.png')}}" alt="Profile-Photo" />
                        @endif
                    </a>
                    <div class="detail" style="text-align:left;">
                        <?php
                            $employee = Auth::user()->employee;
                        ?>
                        @if (Auth::user()->role_id == 2)
                            <h5 style="font-size:13px;margin-bottom:0;">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</h5>
                            <small>Employee</small>
                        @endif

                        @if (Auth::user()->role_id == 3)
                        <h5 style="font-size:13px;margin-bottom:0;">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</h5>
                        <small>Project Manager</small>
                        @endif

                        @if (Auth::user()->role_id == 4)
                        <h5 style="font-size:13px;margin-bottom:0;">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</h5>
                        <small>HR</small>
                        @endif

                        <small>{{Auth::user()->role_id == 1 ? 'Admin' : null }}</small>
                    </div>
                </div>
            </li>

            @can('admin-dashboard')
                <li class="{{ request()->is('admin/dashboard') ? 'active open' : null }}"><a href="{{url('admin/dashboard')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            @endcan
            @can('employee-dashboard')
                <li class="{{ request()->is('emp/dashboard') ? 'active open' : null }}"><a href="{{url('emp/dashboard')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            @endcan
            @can('manager-dashboard')
                <li class="{{ request()->is('manager/dashboard') ? 'active open' : null }}"><a href="{{url('manager/dashboard')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            @endcan
            @can('hr-dashboard')
                <li class="{{ request()->is('hr/dashboard') ? 'active open' : null }}"><a href="{{url('hr/dashboard')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            @endcan

            @can('employee')
            <li class="{{ request()->is('employee') || request()->is('employee/create')? 'active open' : null }}">
                <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-users"></i> <span>Employee</span></a>
                <ul class="ml-menu">
                    <li class="{{ request()->is('employee') ? 'active' : null }}"><a href="{{url('employee')}}">All Employees</a></li>
                    <li class="{{ request()->is('employee/create') ? 'active' : null }}"><a href="{{url('employee/create')}}">Add Employee</a></li>
                </ul>
            </li>
            @endcan

            @can('client')
                <li class="{{ request()->is('client') || request()->is('client/create') || request()->is('client-invoice') || request()->is('client-invoice/create')? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-user-tie"></i> <span>Client</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('client') ? 'active' : null }}"><a href="{{url('client')}}">All Clients</a></li>
                        <li class="{{ request()->is('client/create') ? 'active' : null }}"><a href="{{url('client/create')}}">Add Client</a></li>
                        <li class="{{ request()->is('client-invoice') ? 'active' : null }}"><a href="{{url('client-invoice')}}">All Invoices</a></li>
                        <li class="{{ request()->is('client-invoice/create') ? 'active' : null }}"><a href="{{url('client-invoice/create')}}">Add Invoice</a></li>
                    </ul>
                </li>
            @endcan

            @can('project')
                <li class="{{ request()->is('project') || request()->is('project/create')? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-project-diagram"></i> <span>Project</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('project') ? 'active' : null }}"><a href="{{url('project')}}">All Projects</a></li>
                        <li class="{{ request()->is('project/create') ? 'active' : null }}"><a href="{{url('project/create')}}">Add Project</a></li>
                    </ul>
                </li>
            @endcan

            @can('tasktracker')
                <li class="{{ request()->is('task-tracker') || request()->is('task-tracker/create') || request()->is('task-report') || request()->is('task-module') ? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-tasks"></i> <span>Task Tracker</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('task-tracker') ? 'active' : null }}"><a href="{{url('task-tracker')}}">All Tasks</a></li>
                        <li class="{{ request()->is('task-tracker/create') ? 'active' : null }}"><a href="{{url('task-tracker/create')}}">Add Task</a></li>
                        <li class="{{ request()->is('task-report') ? 'active' : null }}"><a href="{{url('task-report')}}">Task hourly Report</a></li>
                        <li class="{{ request()->is('task-module') ? 'active' : null }}"><a href="{{url('task-module')}}">Task Module</a></li>
                    </ul>
                </li>
            @endcan

            @can('timetracker')
                <li class="{{ request()->is('time-tracker')? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-calendar-alt"></i> <span>Attendance</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('time-tracker') ? 'active' : null }}"><a href="{{url('time-tracker')}}">Time Tracker</a></li>
                    </ul>
                </li>
            @endcan

            @can('leave-list')
                <li class="{{ request()->is('leave-list')? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-file-alt"></i> <span>Leave</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('leave-list') ? 'active' : null }}"><a href="{{url('leave-list')}}">All Leaves</a></li>
                    </ul>
                </li>
            @endcan

            @can('payslip')
                <li class="{{ request()->is('payslip') || request()->is('payslip/create') ? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-receipt"></i> <span>Payslip</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('payslip') ? 'active' : null }}"><a href="{{url('payslip')}}">All Payslips</a></li>
                        <li class="{{ request()->is('payslip/create') ? 'active' : null }}"><a href="{{url('payslip/create')}}">Add Payslip</a></li>
                    </ul>
                </li>
            @endcan

            @can('department')
                <li class="{{request()->is('department/create') ? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-building"></i> <span>Department</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('department/create') ? 'active' : null }}"><a href="{{url('department/create')}}">Add Department</a></li>
                    </ul>
                </li>
            @endcan

            @can('users')
                <li class="{{ request()->is('user') || request()->is('user/create') ? 'active open' : null }}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-user"></i> <span>Users</span></a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('user') ? 'active' : null }}"><a href="{{url('user')}}">All Users</a></li>
                        <li class="{{ request()->is('user/create') ? 'active' : null }}"><a href="{{url('user/create')}}">Add User</a></li>
                    </ul>
                </li>
            @endcan

            @can('reports')
            <li class="{{ request()->is('reports') ? 'active open' : null }}">
                <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-user"></i> <span>Reports</span></a>
                <ul class="ml-menu">
                    <li class="{{ request()->is('user') ? 'active' : null }}"><a href="{{url('report')}}">All Reports</a></li>
                    {{-- <li class="{{ request()->is('user/create') ? 'active' : null }}"><a href="{{url('user/create')}}">Add User</a></li> --}}
                </ul>
            </li>
            @endcan

            @can('leave')
                <li class="{{request()->is('leave') || request()->is('leave/create') ? 'active' : null}}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-file-alt"></i> <span>My Leaves</span></a>
                    <ul class="ml-menu">
                        <li class="{{request()->is('leave') ? 'active' : null}}"><a href="{{url('leave')}}">All Leave</a></li>
                        <li class="{{request()->is('leave/create') ? 'active' : null}}"><a href="{{url('leave/create')}}">Apply Leave</a></li>
                    </ul>
                </li>
            @endcan

            @can('task')
                <li class="{{request()->is('task') ? 'active' : null}}">
                    <a href="javascript:void(0)" class="menu-toggle"><i class="fas fa-tasks"></i> <span>My Tasks</span></a>
                    <ul class="ml-menu">
                        <li class="{{request()->is('task') ? 'active' : null}}"><a href="{{url('task')}}">All Task</a></li>
                    </ul>
                </li>
            @endcan

        </ul>
    </div>
</aside>
