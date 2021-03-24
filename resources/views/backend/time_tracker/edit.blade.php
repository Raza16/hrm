@extends('backend/layouts/master')

@section('title', 'Time Tracker | Edit')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Time for <b>{{$timeTracker->employee->first_name.' '.$timeTracker->employee->middle_name.' '.$timeTracker->employee->last_name}}</b></h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('time-tracker/'.$timeTracker->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Checkin</label>
                                                    <input type="text" name="role_type" class="form-control" value="">
                                                    @error('role_type')
                                                        <p><small class="text-danger">{{ $errors->first('role_type') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Checkout</label>
                                                    <input type="text" name="role_type" class="form-control" value="">
                                                    @error('role_type')
                                                        <p><small class="text-danger">{{ $errors->first('role_type') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ./row --}}
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                <a href="{{url('role')}}" class="btn btn-secondary">Cancel</a>
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
