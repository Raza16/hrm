@extends('backend/layouts/master')

@section('title', 'Client Invoice | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')

                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Invoice</h3>
                                        <div class="card-options">
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('client-invoice')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Bill To</label>
                                                    <input type="text" name="role_type" class="form-control" value="{{old('role_type')}}">
                                                    @error('role_type')
                                                        <p><small class="text-danger">{{ $errors->first('role_type') }}</small></p>
                                                    @enderror
                                                </div>
                                                <p><b>Billing Period</b></p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>From Date</label>
                                                            <input type="date" name="from_date" class="form-control" value="{{old('from_date')}}">
                                                            @error('from_date')
                                                                <p><small class="text-danger">{{ $errors->first('from_date') }}</small></p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>To Date</label>
                                                            <input type="date" name="from_date" class="form-control" value="{{old('from_date')}}">
                                                            @error('from_date')
                                                                <p><small class="text-danger">{{ $errors->first('from_date') }}</small></p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('role')}}" class="btn btn-secondary">Cancel</a>
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
