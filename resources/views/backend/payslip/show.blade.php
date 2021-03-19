@extends('backend/layouts/master')

@section('title', 'Payslip | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Payslips</h3>
                                        <div class="card-options">
                                            <a href="{{url('generate-pdf/'.$payslip->id)}}" class="btn btn-sm btn-primary" style="background-color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a>
                                        </div>
                                    </div>
                                    <div class="card-body" style="margin-left:90px !important;margin-right:90px !important;">
                                        <div class="row">
                                            <div class="col-6"><img style="float:right;margin-right:20px;" src="{{asset('img/da_tech.png')}}" width="100"/></div>
                                            <div class="col-6">
                                                <h5 style="font-weight:600;">DA Tech</h5>
                                                <p>Plot 6/1 - 5A, Ground floor, Nazimabad Block 5 <br>
                                                   Karachi, 74600 <br>
                                                   Mobile: +92 304 8880004 <br>
                                                   Email: dawn.asad@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="border-style" style="text-align:center;">
                                                    <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Pay Slip for {{date('F - Y', strtotime($payslip->date))}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p class="mt-1 mb-1" style="font-weight:600;">Employee No</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">Name</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">Mobile #</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">CNIC</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">Email</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$payslip->employee->employee_no}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$payslip->employee->first_name.' '.$payslip->employee->middle_name.' '.$payslip->employee->last_name}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$payslip->employee->mobile_no}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$payslip->employee->cnic}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$payslip->employee->email}}</p>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Salary Details:</p>
                                            </div>
                                        </div>

                                        <div class="row border-style">
                                            <div class="col-3">
                                                <p class="mt-1 mb-1"><b>Earnings</b></p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1"><b>Rs.</b></p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1"><b>Deduction</b></p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1"><b>Rs.</b></p>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:10px;">
                                            <div class="col-3">
                                                <p>Basic Monthly Pay</p>
                                                <p>Bonus</p>
                                                <p><b>Payable Amount</b></p>
                                                {{-- <p><b>Total Earning</b></p> --}}
                                            </div>
                                            <div class="col-3">
                                                {{-- basic montyly pay --}}
                                                <p>{{$payslip->basic_monthly_pay}}</p>

                                                {{-- payable amount --}}
                                                {{-- <p>{{$payslip->payable_amount}}</p> --}}

                                                {{-- bonus --}}
                                                <p>{{$payslip->bonus}}</p>

                                                {{-- total earning --}}
                                                <p class="border-style"><b>{{$payslip->payable_amount}}</b></p>
                                            </div>
                                            <div class="col-3">
                                                <p>Hours Deduction</p>
                                                <p><b>Total Deduction</b></p>
                                            </div>
                                            <div class="col-3">
                                                {{-- hours deduction --}}
                                                <p>{{$payslip->hours_deduction}}</p>

                                                {{-- total deduction --}}
                                                <p class="border-style"><b>{{$payslip->total}}</b></p>
                                            </div>
                                        </div>
                                        <div class="row border-style">
                                            <div class="col-6">
                                                <p class="mt-1 mb-1"><b>Net Pay</b></p>
                                            </div>
                                            <div class="col-6">
                                                {{-- net pay --}}
                                                <p class="mt-1 mb-1" style="float: right"><b>{{$payslip->total}}</b></p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p><b>Payment Method: {{ucfirst($payslip->payment_method)}}</b></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mt-3 mb-5">
                                                <p>It is system generated and does not need signature.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
