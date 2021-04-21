@extends('backend/layouts/master')

@section('title', 'PaySlip | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add PaySlip</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('payslip')}}" method="post">
                                        @csrf
                                        <div class="row" id="cal">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control" value="{{old('date')}}">
                                                    @error('date')
                                                        <p><small class="text-danger">{{ $errors->first('date') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Employee</label>
                                                    <select name="employee_id" class="select2 form-control">
                                                        @foreach ($employees as $employee)
                                                            <option></option>
                                                            <option value="{{$employee->id}}">{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('employee_id')
                                                        <p><small class="text-danger">{{ $errors->first('employee_id') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Basic Monthly Pay</label>
                                                    <input type="text" name="basic_monthly_pay" id="basic-pay" class="form-control">
                                                    @error('basic_monthly_pay')
                                                        <p><small class="text-danger">{{ $errors->first('basic_monthly_pay') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Bonus</label>
                                                    <input type="text" name="bonus" id="bonus" class="form-control">
                                                    @error('bonus')
                                                        <p><small class="text-danger">{{ $errors->first('bonus') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Payable Amount</label>
                                                    <input type="text" name="payable_amount" id="pay-amount" class="form-control">
                                                    @error('payable_amount')
                                                        <p><small class="text-danger">{{ $errors->first('payable_amount') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Hours Deduction</label>
                                                    <input type="text" name="hours_deduction" class="form-control" value="{{old('hours_deduction')}}">
                                                    @error('hours_deduction')
                                                        <p><small class="text-danger">{{ $errors->first('hours_deduction') }}</small></p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input type="text" name="total" id="total" class="form-control">
                                                    @error('total')
                                                        <p><small class="text-danger">{{ $errors->first('total') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('payslip')}}" class="btn btn-secondary">Cancel</a>
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

@push('scripts')

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
