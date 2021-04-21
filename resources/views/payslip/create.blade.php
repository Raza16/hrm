@extends('layouts.master')
@section('title', 'Payslip')
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
                <h2>Add Payslip</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('payslip')}}">All Payslips</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{url('payslip')}}" method="post">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control form-control-sm" value="{{old('date')}}">
                            @error('date')
                                <label class="error">{{$errors->first('date')}}</label>
                            @enderror
                        </div>

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

                        <label>Basic Monthly Pay</label>
                        <div class="form-group">
                            <input type="number" name="basic_monthly_pay" id="basic-pay" class="form-control form-control-sm">
                            @error('basic_monthly_pay')
                                <label class="error">{{$errors->first('basic_monthly_pay')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Bonus</label>
                            <input type="number" name="bonus" id="bonus" class="form-control">
                            @error('bonus')
                                <label class="error">{{$errors->first('bonus')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Payable Amount</label>
                            <input type="number" name="payable_amount" id="pay-amount" class="form-control">
                            @error('payable_amount')
                                <label class="error">{{$errors->first('payable_amount')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hours Deduction</label>
                            <input type="number" name="hours_deduction" class="form-control" value="{{old('hours_deduction')}}">
                            @error('hours_deduction')
                                <label class="error">{{$errors->first('hours_deduction')}}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" name="total" id="total" class="form-control">
                            @error('total')
                                <label class="error">{{$errors->first('total')}}</label>
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
<script>

    var basic_pay = $('#basic-pay');
    var $bonus = $('#bonus');
    var pay_amount = $('#pay-amount');
    var total = $('#total');

    function calcVal() {
        var num1 = basic_pay.val();
        var num2 = $bonus.val();
        var result = parseInt(num1, 10) + parseInt(num2, 10);

        if (!isNaN(result)) {
            pay_amount.val(result);
            total.val(result);
          }
      }

      calcVal();
      basic_pay.on("keydown keyup", function() {
          calcVal();
      });
      $bonus.on("keydown keyup", function() {
          calcVal();
      });

</script>
@endpush

@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop


