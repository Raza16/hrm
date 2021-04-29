@extends('layouts.master')
@section('title', 'User')
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
                <h2>Add User</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('user')}}">All Users</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{url('user')}}" method="post">
                    @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label>Select Employee</label>
                        <div class="form-group">
                            <select name="employee_id" class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}" {{old('employee_id') == $employee->id ? 'selected':null}}>{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                <label class="error">{{$errors->first('employee_id')}}</label>
                            @enderror
                        </div>

                        <label>Login Email</label>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-sm" value="{{old('email')}}">
                            @error('email')
                                <label class="error">{{$errors->first('email')}}</label>
                            @enderror
                        </div>

                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-sm" value="{{old('password')}}">
                            @error('password')
                                <label class="error">{{$errors->first('password')}}</label>
                            @enderror
                        </div>

                        <label>Role</label>
                        <div class="form-group">
                            <select name="role_id" class="form-control form-control-sm show-tick">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}" {{$role->id == 1 ? 'disabled' : null}} >{{$role->role_type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="mt-2">Login Status</label>
                        <div class="form-group">
                            <div class="radio inlineblock m-r-20">
                                <input type="radio" name="status" id="Active" class="with-gap" checked value="1" {{old('status') == '1' ? 'checked':null}}>
                                <label for="Active">Active</label>
                            </div>
                            <div class="radio inlineblock">
                                <input type="radio" name="status" id="Inactive" class="with-gap" value="0" {{old('status') == '0' ? 'checked':null}}>
                                <label for="Inactive">Inactive</label>
                            </div>
                            <br>
                            @error('status')
                                <label class="error">{{$errors->first('status')}}</label>
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

@push('after-scripts')

@endpush

@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop


