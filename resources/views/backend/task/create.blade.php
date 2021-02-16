@extends('backend/layouts/master')

@section('title', 'Task | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade" id="list" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box green">New</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar1.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">07</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$2,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box indigo">India</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar3.jpg" alt="">
                                        <h6 class="mt-3 mb-0">David Wallace</h6>
                                        <span>Michelle@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">14</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$7,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar4.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">08</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$5,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar6.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">05</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$1,071</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box orange">Gold</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar5.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">31</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$45,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar1.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Sean Black</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">31</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$45,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box pink">USA</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar2.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Jason Porter</h6>
                                        <span>Carol@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">22</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$12,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar2.jpg" alt="">
                                        <h6 class="mt-3 mb-0">David Wallace</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dropbox"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-apple"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">12</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$1,840</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Task</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('task')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Project Title</label>
                                                    {{-- <input type="text" name="project_id" class="form-control" value="{{old('project_id')}}"> --}}
                                                    <select  name="project_id" class="form-control">
                                                        <option value="" disabled selected>-- Select Project --</optoin>
                                                        @foreach ($projects as $project)
                                                            <option value="{{$project->id}}">{{$project->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('project_id')
                                                        <p><small class="text-danger">{{ $errors->first('project_id') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Assign To Employee</label>
                                                    <select name="employee_id" class="form-control">
                                                    <option value="" disabled selected>-- Select Employee --</optoin>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{$employee->id}}">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</option>
                                                    @endforeach
                                                    </select>
                                                    @error('employee_id')
                                                        <p><small class="text-danger">{{ $errors->first('employee_id') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Task No</label>
                                                    <input type="text" name="task_no" class="form-control" value="{{$newTaskNo}}" readonly>
                                                    @error('task_no')
                                                        <p><small class="text-danger">{{ $errors->first('task_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Priority</label>
                                                    <select name="priority" class="form-control">
                                                        <option value="normal">Normal</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="high">High</option>
                                                    </select>
                                                    @error('priority')
                                                        <p><small class="text-danger">{{ $errors->first('priority') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Assign Date</label>
                                                    <input type="date" name="assign_date" class="form-control" value="{{$todayDate}}">
                                                    @error('assign_date')
                                                        <p><small class="text-danger">{{ $errors->first('assign_date') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="process">Process</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                    @error('status')
                                                        <p><small class="text-danger">{{ $errors->first('status') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Note</label>
                                                    <textarea rows="6" name="note" class="form-control">{{old('note')}}</textarea>
                                                    @error('note')
                                                        <p><small class="text-danger">{{ $errors->first('note') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Document Attachment</label>
                                                    <input type="file" name="document" class="form-control">
                                                    @error('document')
                                                        <p><small class="text-danger">{{ $errors->first('document') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ./row --}}
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('task')}}" class="btn btn-secondary">Cancel</a>
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
