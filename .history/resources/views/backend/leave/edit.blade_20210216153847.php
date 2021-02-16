@extends('backend/layouts/master')

@section('title', 'Leave | Edit')

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
                                        <h3 class="card-title">Edit Leave</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('leave-list/'.$leave->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label><b>Leave Type</b></label>
                                                    <p>{{$leave->leave_type}}</p>
                                                    {{-- <select name="leave_type" class="form-control">
                                                        <option value="casual" {{$leave->leave_type == 'casual' ? 'selected' : ''}}>Casual</option>
                                                        <option value="sick" {{$leave->leave_type == 'sick' ? 'selected' : ''}}>Sick</option>
                                                    </select>
                                                    @error('leave_type')
                                                        <p><small class="text-danger">{{ $errors->first('leave_type') }}</small></p>
                                                    @enderror --}}
                                                </div>
                                                <div class="form-group">
                                                    <label><b>From Date</b></label>
                                                    <p>{{$leave->from_date}}</p>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>To Date</b></label>
                                                    <p>{{$leave->to_date}}</p>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Reason</b></label>
                                                    <p>{{$leave->reason}}</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>To Date</label>
                                                    <input type="date" name="to_date" class="form-control" value="{{$leave->to_date}}">
                                                    @error('to_date')
                                                        <p><small class="text-danger">{{ $errors->first('to_date') }}</small></p>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>
                                        {{-- ./row --}}
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('leave')}}" class="btn btn-secondary">Cancel</a>
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
