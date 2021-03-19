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
                                    </div>
                                    <div class="card-body">
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
                                                <div style="text-align:center;">
                                                    <p>Pay Slip for</p>
                                                </div>
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
