@extends('backend/layouts/master')

@section('title', 'Client | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Client</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('client')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" name="full_name" class="form-control" value="{{old('full_name')}}">
                                                    @error('full_name')
                                                        <p><small class="text-danger">{{ $errors->first('full_name') }}</small></p>
                                                    @enderror
                                                </div>
                                                 <div class="form-group">
                                                    <label>Gender</label>
                                                    <br>
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="gender" value="male" checked>Male
                                                        </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"name="gender" value="female">Female
                                                        </label>
                                                        </div>
                                                    @error('gender')
                                                        <p><small class="text-danger">{{ $errors->first('gender') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" value="{{old('email')}}">
                                                    @error('email')
                                                        <p><small class="text-danger">{{ $errors->first('email') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile No</label>
                                                    <input type="text" name="mobile_no" class="form-control" value="{{old('mobile_no')}}">
                                                    @error('mobile_no')
                                                        <p><small class="text-danger">{{ $errors->first('mobile_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" name="country" class="form-control" value="{{old('country')}}">
                                                    @error('country')
                                                        <p><small class="text-danger">{{ $errors->first('country') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>State/Province</label>
                                                    <input type="text" name="state_province" class="form-control" value="{{old('state_province')}}">
                                                    @error('state_province')
                                                        <p><small class="text-danger">{{ $errors->first('state_province') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>city</label>
                                                    <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                                    @error('city')
                                                        <p><small class="text-danger">{{ $errors->first('city') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('client')}}" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
