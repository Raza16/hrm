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
                                                <h6>Employee Info</h6>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" name="employee_no" class="form-control" value="{{ $newEmployeeNo }}" readonly>
                                                    @error('employee_no')
                                                        <p><small class="text-danger">{{ $errors->first('employee_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}"/>
                                                    @error('first_name')
                                                        <p><small class="text-danger">{{ $errors->first('first_name') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name') }}"/>
                                                    @error('middle_name')
                                                        <p><small class="text-danger">{{ $errors->first('middle_name') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" />
                                                    @error('last_name')
                                                        <p><small class="text-danger">{{ $errors->first('last_name') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="text" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
                                                    @error('date_of_birth')
                                                        <p><small class="text-danger">{{ $errors->first('date_of_birth') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" name="gender" class="form-control" value="{{ old('gender') }}"/>
                                                    @error('gender')
                                                        <p><small class="text-danger">{{ $errors->first('gender') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Marital Status</label>
                                                    <input type="text" name="marital_status" class="form-control" value="{{ old('marital_status') }}"/>
                                                    @error('marital_status')
                                                        <p><small class="text-danger">{{ $errors->first('marital_status') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Qualification</label>
                                                    <input type="text" name="qualification" class="form-control" value="{{ old('qualification') }}"/>
                                                    @error('qualification')
                                                        <p><small class="text-danger">{{ $errors->first('qualification') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>CNIC</label>
                                                    <input type="text" name="cnic" class="form-control" value="{{ old('cnic') }}"/>
                                                    @error('cnic')
                                                        <p><small class="text-danger">{{ $errors->first('cnic') }}</small></p>
                                                    @enderror
                                                </div>
                                                <h6>Employee Contact Details</h6>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Mobile No</label>
                                                    <input type="text" name="mobile_no" class="form-control" value="{{ old('mobile_no') }}"/>
                                                    @error('mobile_no')
                                                        <p><small class="text-danger">{{ $errors->first('mobile_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Home Phone </label>
                                                    <input type="text" name="home_phone" class="form-control" value="{{ old('home_phone') }}"/>
                                                    @error('home_phone')
                                                        <p><small class="text-danger">{{ $errors->first('home_phone') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Emergency Contact</label>
                                                    <input type="text" name="emergency_contact" class="form-control" value="{{ old('emergency_contact') }}"/>
                                                    @error('emergency_contact')
                                                        <p><small class="text-danger">{{ $errors->first('emergency_contact') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}"/>
                                                    @error('email')
                                                        <p><small class="text-danger">{{ $errors->first('email') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Email</label>
                                                    <input type="text" name="other_email" class="form-control" value="{{ old('other_email') }}"/>
                                                    @error('other_email')
                                                        <p><small class="text-danger">{{ $errors->first('other_email') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 second-column">
                                            <h6>Employee Address</h6>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" name="country" class="form-control" value="{{ old('country') }}"/>
                                                    @error('country')
                                                        <p><small class="text-danger">{{ $errors->first('country') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Province/State</label>
                                                    <input type="text" name="province_state" class="form-control" value="{{ old('province_state') }}"/>
                                                    @error('province_state')
                                                        <p><small class="text-danger">{{ $errors->first('province_state') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}"/>
                                                    @error('city')
                                                        <p><small class="text-danger">{{ $errors->first('city') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <input type="text" name="nationality" class="form-control" value="{{ old('nationality') }}"/>
                                                    @error('nationality')
                                                        <p><small class="text-danger">{{ $errors->first('nationality') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Postal/Zip Code</label>
                                                    <input type="text" name="postal_code" class="form-control" value="{{ old('postal_code') }}"/>
                                                    @error('postal_code')
                                                        <p><small class="text-danger">{{ $errors->first('postal_code') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"/>
                                                    @error('address')
                                                        <p><small class="text-danger">{{ $errors->first('address') }}</small></p>
                                                    @enderror
                                                </div>
                                                <h6>Employee Notes</h6>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Notes</label>
                                                    <textarea rows="6"  name="notes" class="form-control">{{ old('notes') }}</textarea>
                                                    @error('notes')
                                                        <p><small class="text-danger">{{ $errors->first('notes') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Profile Image</label>
                                                    <div style="width:200px; border:1px solid #d9dee4;">
                                                        <img style="max-width:200px;max-height:200px;
                                                        display:block;" class="for-image" src="https://via.placeholder.com/200x200?text=200+x+200"/>
                                                        <button type="button" style="background:#d9dee4; border-radius:0px;width:200px;cursor:pointer;font-size:12px;font-weight:600;" class="upload-button btn btn-default"><i style="font-size:14px;" class="fa fa-upload" aria-hidden="true"></i> &nbsp;Upload Image</button>
                                                        <input style="display:none;" class="file-upload" type="file" name="profile_image" accept="image/*"/>
                                                    </div>
                                                    @error('profile_image')
                                                        <p><small class="text-danger">{{ $errors->first('profile_image') }}</small></p>
                                                    @enderror 
                                                </div>

                                                <h6>Employee Credentials</h6>
                                                <hr>
                                                 <div class="form-group">
                                                    <label>Login Email</label>
                                                    <input type="email" name="login_email" class="form-control" value="{{ old('login_email') }}"/>
                                                    @error('login_email')
                                                        <p><small class="text-danger">{{ $errors->first('login_email') }}</small></p>
                                                    @enderror
                                                </div>
                                                 <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}"/>
                                                    @error('password')
                                                        <p><small class="text-danger">{{ $errors->first('password') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select class="form-control" name="role_id">
                                                        <option>Employee</option>
                                                    </select>
                                                    @error('role_id')
                                                        <p><small class="text-danger">{{ $errors->first('role_id') }}</small></p>
                                                    @enderror
                                                </div>


                                            </div>

                                        </div>
                                        {{-- ./row --}}

                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('employee')}}" class="btn btn-secondary">Cancel</a>
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
