@extends('backend/layouts/master')

@section('title', 'Client Invoice | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Client Invoice</h3>
                                        <div class="card-options">
                                            {{-- <a href="{{url('generate-pdf/'.$clientInvoice->id)}}" class="btn btn-sm btn-primary" style="background-color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a> --}}
                                        </div>
                                    </div>
                                    <div class="card-body" style="margin-left:90px !important;margin-right:90px !important;">
                                        <div class="row">
                                            {{-- <div class="col-6"><img style="float:right;margin-right:20px;" src="{{asset('img/da_tech.png')}}" width="100"/></div> --}}
                                            <div class="col-12" style="text-align: center;">
                                                <img style="margin-right:20px;" src="{{asset('img/da_tech.png')}}" width="50"/>
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
                                                    <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Billing Period: {{date('d F, Y', strtotime($clientInvoice->from_date))}} - {{date('d F, Y', strtotime($clientInvoice->to_date))}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p><b>Bill To,</b></p>
                                                <table>
                                                    <tr>
                                                        <th style="padding-right:100px;padding-bottom:10px;">Invoice No</th>
                                                        <td>{{$clientInvoice->invoice_no}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-bottom:10px;">Name</th>
                                                        <td>{{$clientInvoice->client->full_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-bottom:10px;">Mobile #</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="padding-bottom:10px;">Email</th>
                                                        <td>{{$clientInvoice->client->email}}</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="col-6">
                                                <p></p>
                                                <table>
                                                    <tr>
                                                        <th style="padding-right:100px;padding-bottom:10px;">Services</th>
                                                        <td>{{$clientInvoice->task_module->module}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Invoice Details:</p>
                                            </div>
                                        </div>

                                        <div class="row border-style">
                                            <div class="col-12">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Description & miscellaneous work</th>
                                                        <th>Quantity</th>
                                                        <th>Rate</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($clientInvoiceDetail as $cid)
                                                            <tr>
                                                                <td>{{$cid->description}}</td>
                                                                <td>{{$cid->quantity}}</td>
                                                                <td>{{$cid->rate}}</td>
                                                                <td>{{$cid->total}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-5" style="border-bottom:1px solid #000;">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label><b>Notes</b></label>
                                                    <p>{{$clientInvoice->notes}}</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div style="float:right;background-color: #fdfbfb;padding: 25px;">
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
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12 mt-3 mb-5">
                                                <small>It is system generated and does not need signature.</small>
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
