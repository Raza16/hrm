@extends('backend/layouts/master')

@section('title', 'DATech | Dashboard')

@section('main-content')

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h4>Welcome!</h4>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Employees</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">{{$totalEmployees}}</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Clients</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">{{$totalClients}}</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Project</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">{{$totalProjects}}</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Tasks</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">{{$totalTasks}}</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Leaves</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">19</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32">284</h5>
                        {{-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sales Analytics</h3>
                        <div class="card-options">
                            <button class="btn btn-sm btn-outline-secondary mr-1" id="one_month">1M</button>
                            <button class="btn btn-sm btn-outline-secondary mr-1" id="six_months">6M</button>
                            <button class="btn btn-sm btn-outline-secondary mr-1" id="one_year" class="active">1Y</button>
                            <button class="btn btn-sm btn-outline-secondary mr-1" id="ytd">YTD</button>
                            <button class="btn btn-sm btn-outline-secondary" id="all">ALL</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="apex-timeline-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Current Ticket Status</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between">
                            <div class="font-12">as of 10th to 17th of Jun 2019</div>
                            <div class="selectgroup w250">
                                <label class="selectgroup-item">
                                    <input type="radio" name="intensity" value="Day" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">1D</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="intensity" value="Week" class="selectgroup-input">
                                    <span class="selectgroup-button">1W</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="intensity" value="Month" class="selectgroup-input">
                                    <span class="selectgroup-button">1M</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="intensity" value="Year" class="selectgroup-input">
                                    <span class="selectgroup-button">1Y</span>
                                </label>
                            </div>
                        </div>
                        <div id="chart-combination" style="height: 205px"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6 col-xl-3 col-md-6">
                                <h5>05</h5>
                                <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Yesterday</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-uppercase font-10">New Tickets</span>
                            </div>
                            <div class="col-6 col-xl-3 col-md-6">
                                <h5>18</h5>
                                <div class="clearfix">
                                    <div class="float-left"><strong>61%</strong></div>
                                    <div class="float-right"><small class="text-muted">Yesterday</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: 61%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-uppercase font-10">Open Tickets</span>
                            </div>
                            <div class="col-6 col-xl-3 col-md-6">
                                <h5>06</h5>
                                <div class="clearfix">
                                    <div class="float-left"><strong>100%</strong></div>
                                    <div class="float-right"><small class="text-muted">Yesterday</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: 100%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-uppercase font-10">Solved Tickets</span>
                            </div>
                            <div class="col-6 col-xl-3 col-md-6">
                                <h5>11</h5>
                                <div class="clearfix">
                                    <div class="float-left"><strong>87%</strong></div>
                                    <div class="float-right"><small class="text-muted">Yesterday</small></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-uppercase font-10">Unresolved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Project Statistics</h3>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4 border-right pb-4 pt-4">
                                <label class="mb-0 font-13">Total Project</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$totalProjects}}</h4>
                            </div>
                            <div class="col-4 border-right pb-4 pt-4">
                                <label class="mb-0 font-13">On Going</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$processProjects}}</h4>
                            </div>
                            <div class="col-4 pb-4 pt-4">
                                <label class="mb-0 font-13">Pending</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$pendingProjects}}</h4>
                            </div>
                            <div class="col-4 pb-4 pt-4">
                                <label class="mb-0 font-13">Completed</label>
                                <h4 class="font-30 font-weight-bold text-col-blue">{{$completedProjects}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter mb-0">
                            <tbody>
                                @foreach ($projectStatus as $ps)
                                <tr>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"><strong>{{$ps->count_status/100*100}} %</strong></div>
                                            <div class="float-right"><small class="text-muted">{{$ps->title}}</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-azure" role="progressbar" style="width:{{$ps->count_status/100*100}}%"></div>
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
    <!-- /Main Content -->

@endsection
