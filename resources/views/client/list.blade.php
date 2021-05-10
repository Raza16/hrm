@extends('layouts.master')
@section('title', 'Clients')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>All Clients</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('client/create')}}">Add Client</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="admin-datatable table table-hover" style="width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>Options</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Options</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Country</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr class="show-option">
                                    <td>
                                        <div  class="container hide-option">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div style="border: 0.5px solid #888888;border-radius:50px;padding:2px 0px 1px 4px;width:28px;margin-top:15px;margin-left:-5px;">
                                            <ul class="header-dropdown" style="list-style-type:none;padding:0;margin-top:1px;margin-left:2px;margin-bottom:2px;">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size: 15px;" class="fas fa-ellipsis-h-alt"></i> </a>
                                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 34px, 0px);">
                                                        <li><a href="{{url('client-invoice/create/'.$client->id)}}">Add Invoice</a></li>
                                                        <li><a href="{{url('client/'.$client->id.'/edit')}}">Edit</a></li>
                                                        <li>
                                                            <a href="{{url('client/'.$client->id)}}" onclick="event.preventDefault();
                                                                document.getElementById('delete').submit();">Delete</a>
                                                            <form id="delete" action="{{url('client/'.$client->id)}}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                <td>{{$client->full_name}}</td>
                                <td>{{$client->gender}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->country}}</td>
                                {{-- <td>
                                    <div style="display: flex;">
                                        <a href="{{url('client-invoice/create/'.$client->id)}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Create Invoice"><i class="far fa-receipt"></i></a>
                                        <a href="{{url('client/'.$client->id.'/edit')}}" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                                        <form action="{{url('client/'.$client->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td> --}}
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
