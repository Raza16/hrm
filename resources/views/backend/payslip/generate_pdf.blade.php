<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="{{asset('img/datech.ico')}}" type="image/x-icon"/>

<title>Payslip-PDF</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" /> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css"/>

<link rel="stylesheet" href="{{asset('css/aksFileUpload.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('assets/plugins/charts-c3/c3.min.css')}}"/>

<!-- Core css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/theme1.css')}}"/>

<!-- Select2 css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

{{-- custom css for whole project --}}
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>


{{-- blog featured image css --}}
<link
    rel="stylesheet"
    type="text/css"
    href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
/>

</head>

<body class="font-opensans">
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    {{-- <div class="card-header">
                                        <h3 class="card-title">Payslips</h3>
                                    </div> --}}
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
                                                <div style="text-align:center;border-top:2px solid #000;border-bottom:2px solid #000;">
                                                    <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Pay Slip for {{date('F - Y', strtotime($date))}}</p>
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
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$employee_no}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$first_name.' '.$middle_name.' '.$last_name}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$mobile_no}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$cnic}}</p>
                                                <p class="mt-1 mb-1" style="font-weight:600;">{{$email}}</p>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <p style="padding-top:8px;margin-bottom:8px;font-weight:600;">Salary Details:</p>
                                            </div>
                                        </div>

                                        <div class="row" style="border-top:2px solid #000;border-bottom:2px solid #000;">
                                            <div class="col-3">
                                                <p class="mt-1 mb-1" style="font-weight:600;">Earnings</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1" style="font-weight:600;">Rs.</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1" style="font-weight:600;">Deduction</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-1 mb-1" style="font-weight:600;">Rs.</p>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:10px;">
                                            <div class="col-3">
                                                <p>Basic Monthly Pay</p>
                                                {{-- <p>Payable Amount</p> --}}
                                                <p>Bonus</p>
                                                <p><b>Total Earning</b></p>
                                            </div>
                                            <div class="col-3">
                                                {{-- basic montyly pay --}}
                                                <p>{{$basic_monthly_pay}}</p>

                                                {{-- payable amount --}}
                                                {{-- <p>{{$payslip->payable_amount}}</p> --}}

                                                {{-- bonus --}}
                                                <p>{{$bonus}}</p>

                                                {{-- total earning --}}
                                                <p style="border-top:2px solid #000;border-bottom:2px solid #000;"><b>{{$payable_amount}}</b></p>
                                            </div>
                                            <div class="col-3">
                                                <p>Hours Deduction</p>
                                                {{-- <p><b>Total Deduction</b></p> --}}
                                            </div>
                                            <div class="col-3">
                                                {{-- hours deduction --}}
                                                <p>{{$hours_deduction}}</p>

                                                {{-- total deduction --}}
                                                {{-- <p style="border-top:2px solid #000;border-bottom:2px solid #000;"><b>{{$total}}</b></p> --}}
                                            </div>
                                        </div>
                                        <div class="row" style="border-top:2px solid #000;border-bottom:2px solid #000;">
                                            <div class="col-6">
                                                <p class="mt-1 mb-1"><b>Net Pay</b></p>
                                            </div>
                                            <div class="col-6">
                                                {{-- net pay --}}
                                                <p class="mt-1 mb-1" style="float: right"><b>{{$total}}</b></p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p><b>Payment Method: {{strtoupper($payment_method)}}</b></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mt-5">
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


{{------------------ theme js files -----------------}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knobjs.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/page/project-index.js')}}"></script>

{{--------------- js files use within project -----------------}}

<script src="{{asset('js/aksFileUpload.min.js')}}"></script>

{{-- blog featured image --}}
<script src="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.js"></script>

{{-- Select 2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


{{-- Custom.js for whole project --}}
<script src="{{asset('assets/js/custom.js')}}"></script>

@stack('scripts')

{{-- Ck editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>


{{-- datatables --}}
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

</body>
</html>
