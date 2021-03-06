@extends('layouts.master')
@section('title', 'Payslip')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Payslip</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('payslip')}}">All Payslip</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body" style="padding-left:70px !important;padding-right:70px !important;">
                <div class="row">
                    <div class="col-12" style="text-align:center;margin-top:50px;">
                        <img style="margin-right:20px;" src="{{asset('img/datech-logo.png')}}" width="50"/>
                        <h5 class="mt-3" style="font-weight:600;">DA Tech</h5>
                        <p>Plot 6/1 - 5A, Ground floor, Nazimabad Block 5
                           Karachi, 74600<br>
                           Mobile: +92 304 8880004<br>
                           Email: dawn.asad@gmail.com</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="border-style" style="text-align:center;">
                            <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Payslip for {{date('F - Y', strtotime($payslip->date))}}</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 col-sm-12">
                        {{-- <p><b>Bill To,</b></p> --}}
                        <table>
                            <tr>
                                <th style="padding-right:100px;padding-bottom:10px;">Employee No</th>
                                <td>{{$payslip->employee->employee_no}}</td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px;">Name</th>
                                <td>{{$payslip->employee->first_name.' '.$payslip->employee->middle_name.' '.$payslip->employee->last_name}}</td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px;">Mobile #</th>
                                <td>{{$payslip->employee->mobile_no}}</td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px;">Email</th>
                                <td>{{$payslip->employee->email}}</td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px;">CNIC</th>
                                <td>{{$payslip->employee->cnic}}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        {{-- <table>
                            <tr>
                                <th style="padding-right:100px;padding-bottom:10px;">Services</th>
                                <td>{{$clientInvoice->task_module->module}}</td>
                            </tr>
                        </table> --}}
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Salary Details:</p>
                    </div>
                </div>

                <div class="row border-style">
                    <div class="col-md-6 col-md-12 ">
                        <div class="table-responsive">
                        <table class="table">
                            <thead  class="thead-light">
                            <tr>
                                <th>Earnings</th>
                                <th>Rs.</th>
                                <th>Deduction</th>
                                <th>Hours.</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Basic Monthly Pay</td>
                                    <td>{{$payslip->basic_monthly_pay}}</td>
                                    <td class="text-danger">Hours Deduction</td>
                                    <td class="text-danger">{{$payslip->hours_deduction}}</td>
                                </tr>
                                <tr>
                                    <td>Bonus</td>
                                    <td>{{$payslip->bonus}}</td>
                                </tr>
                                <tr>
                                    <td><b>Payable Amount</b></td>
                                    <td><b>{{$payslip->payable_amount}}</b></td>
                                </tr>
                                <tr style="background-color: #e9e7e7;">
                                    <td><b>Net Pay</b></td>
                                    <td></td>
                                    <td></td>
                                    <td><b>{{$payslip->total}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="row" style="border-bottom:1px solid rgb(185, 185, 185);">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label><b>Notes</b></label>
                            <p>{{$clientInvoice->notes}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div style="float:right;background-color: #f5f2f2;padding: 25px;">
                        <table>
                            <tr>
                                <td style="padding-right:140px;">Discount</td>
                                <td>
                                    {{$clientInvoice->discount}}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="color:green;"><b>Grand Total</b></td>
                                <td><b>{{$clientInvoice->grand_total}}</b></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <small>It is system generated and does not need signature.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')

@stop
