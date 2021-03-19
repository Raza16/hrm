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
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <table class="table">
                                                    <tr>
                                                        <th>Description and Miscellaneous Work</th>
                                                        <th>Quantity</th>
                                                        <th>Rate</th>
                                                        <th>Total</th>
                                                        <th>option</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="description" /></td>
                                                        <td><input type="text" class="form-control" name="quantity" /></td>
                                                        <td><input type="text" class="form-control" name="rate" /></td>
                                                        <td><input type="text" class="form-control" name="total" readonly/></td>
                                                        <td><button type="button" class="delete-row btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></td>
                                                    </tr>
                                                </table>
                                                <button type="button" id="add-doc" class="mt-3 btn btn-sm btn-primary">+Add</button>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6"></div>
                                            <div class="col-6">
                                                <table  style="float: right;">
                                                    <tr>
                                                        <td style="padding-right:140px;">Discount</td>
                                                        <td><input type="text" class="form-control form-control-sm" name="discount" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grand Total</td>
                                                        <td><input type="text" class="form-control form-control-sm" name="grand_total" readonly/></td>
                                                    </tr>
                                                </table>


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
