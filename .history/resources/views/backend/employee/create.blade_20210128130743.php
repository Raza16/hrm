@extends('backend/layouts/master')

@section('title', 'Employee | Create')

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
                                        <h3 class="card-title">Add Employee</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('employee')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" name="employee_no" class="form-control" value="{{ old('employee_no') }}">
                                                    @error('employee_no')
                                                        <p><small class="text-danger">{{ $errors->first('employee_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="editor" name="description" class="form-control no-resize" placeholder="description...">{{ old('description') }}</textarea>
                                                    @error('description')
                                                        <p><small class="text-danger">{{ $errors->first('description') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Author</label>
                                                    <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                                                    @error('author')
                                                        <p><small class="text-danger">{{ $errors->first('author') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>slug</label>
                                                    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" readonly>
                                                    @error('slug')
                                                        <p><small class="text-danger">{{ $errors->first('slug') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Meta Title</label>
                                                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                                                    @error('meta_title')
                                                        <p><small class="text-danger">{{ $errors->first('meta_title') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Meta description</label>
                                                    <textarea rows="4" name="meta_description" class="form-control no-resize" placeholder="description...">{{ old('meta_description') }}</textarea>
                                                    @error('meta_description')
                                                        <p><small class="text-danger">{{ $errors->first('meta_description') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 second-column">
                                                <div class="form-group">
                                                    <label>Featured Image</label>
                                                    <div style="width:469px; border:1px solid #d9dee4;">
                                                        <img style="max-width:469px;max-height:250px;
                                                        display:block;" class="featured-image" src="https://via.placeholder.com/1100x550?text=1100+x+550"/>
                                                        <button type="button" style="background:#d9dee4; border-radius:0px;width:469px;cursor:pointer;font-size:12px;font-weight:600;" class="upload-button btn btn-default"><i style="font-size:14px;" class="fa fa-upload" aria-hidden="true"></i> &nbsp;Upload Image</button>
                                                        <input style="display:none;" class="file-upload" type="file" name="featured_image" accept="image/*"/>
                                                    </div>
                                                    @error('featured_image')
                                                        <p><small class="text-danger">{{ $errors->first('featured_image') }}</small></p>
                                                    @enderror 
                                                </div>
                                            </div>

                                        </div>
                                        {{-- ./row --}}

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('cms/blog')}}" class="btn btn-secondary">Cancel</a>
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
