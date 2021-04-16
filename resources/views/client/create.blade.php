@extends('layouts.master')
@section('title', 'Client')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
@stop

@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Add Client</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('client')}}">All Client</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{url('client')}}" method="post">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Full Name<span class="text-danger">*</span></label>
                            <input type="text" name="full_name" class="form-control form-control-sm" value="{{old('full_name')}}">
                            @error('full_name')
                                <label class="error">{{$errors->first('full_name')}}</label>
                            @enderror
                        </div>

                        <label>Gender</label>
                        <div class="form-group">
                            <div class="radio inlineblock m-r-20">
                                <input type="radio" name="gender" id="Male" class="with-gap" value="male" {{old('gender') == 'male' ? 'checked':null}}>
                                <label for="Male">Male</label>
                            </div>
                            <div class="radio inlineblock">
                                <input type="radio" name="gender" id="Female" class="with-gap" value="female" {{old('gender') == 'female' ? 'checked':null}}>
                                <label for="Female">Female</label>
                            </div>
                            <br>
                            @error('gender')
                                <label class="error">{{$errors->first('gender')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" class="form-control form-control-sm" value="{{old('email')}}">
                            @error('email')
                                <label class="error">{{ $errors->first('email') }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" name="mobile_no" class="form-control form-control-sm" value="{{old('mobile_no')}}">
                            @error('mobile_no')
                                <label class="error">{{ $errors->first('mobile_no') }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control form-control-sm" value="{{old('country')}}">
                            @error('country')
                                <label class="error">{{ $errors->first('country') }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>State Province</label>
                            <input type="text" name="state_province" class="form-control form-control-sm" value="{{old('state_province')}}">
                            @error('state_province')
                                <label class="error">{{ $errors->first('state_province') }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control form-control-sm" value="{{old('city')}}">
                            @error('city')
                                <label class="error">{{ $errors->first('city') }}</label>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop

@push('after-scripts')

@endpush
