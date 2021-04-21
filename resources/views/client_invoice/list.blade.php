@extends('layouts.master')
@section('title', 'Invoices')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>All Client Invoices</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('client-invoice/create')}}">Add Invoice</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="admin-datatable table table-hover" style="width:100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>Client</th>
                                <th>Invoice No</th>
                                <th>Billing Period</th>
                                {{-- <th>Discount</th> --}}
                                {{-- <th>Grand Total</th> --}}
                                <th>Services</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Client</th>
                                <th>Invoice No</th>
                                <th>Billing Period</th>
                                {{-- <th>Discount</th> --}}
                                {{-- <th>Grand Total</th> --}}
                                <th>Services</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($clientInvoices as $clientInvoice)
                            <tr>
                                {{-- @isset($clientInvoice->client->full_name) --}}
                                <td>{{$clientInvoice->client->full_name}}</td>
                                {{-- @endisset --}}
                                <td>{{$clientInvoice->invoice_no}}</td>
                                <td><b>From:</b> {{date('j F, Y', strtotime($clientInvoice->from_date)) ?? null}} <br> <b>To:</b> {{$clientInvoice->to_date ? date('j F, Y', strtotime($clientInvoice->to_date)):null}}</td>
                                {{-- <td>{{$clientInvoice->discount}}</td> --}}
                                {{-- <td>{{$clientInvoice->grand_total}}</td> --}}
                                <td>{{$clientInvoice->task_module->module}}</td>
                                <td>
                                    <div style="display: flex;">
                                        {{-- <a href="{{url('client-invoice/'.$clientInvoice->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a> --}}

                                        <a href="{{url('client-invoice/'.$clientInvoice->id)}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a>

                                        <form action="{{url('client-invoice/'.$clientInvoice->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
