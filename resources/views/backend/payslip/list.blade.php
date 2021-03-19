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
                                            <a class="btn btn-sm btn-secondary mr-1" href="{{url('payslip/create')}}">Add Payslip</a>
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>Date</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-hover">
                                                @foreach ($payslips as $payslip)
                                                <tr>
                                                    <td>{{$payslip->employee->first_name.' '.$payslip->employee->middle_name.' '.$payslip->employee->last_name}}</td>
                                                    <td>{{$payslip->date}}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                            <div class="btn-group" role="group">
                                                                 <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options
                                                                 </button>
                                                                 <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                 <a class="dropdown-item" href="{{url('payslip/'.$payslip->id)}}">View</a>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>Date</th>
                                                    <th>Options</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
