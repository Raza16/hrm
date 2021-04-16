@extends('backend/layouts/master')

@section('title', 'Employee | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Employee List</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            <a class="btn btn-sm btn-secondary mr-1" href="{{url('employee/create')}}">Add Employee</a>
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Employee No</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    {{-- <th>Status</th> --}}
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-hover ">
                                                @foreach ($employees as $employee)
                                                    <tr>
                                                        <td>{{$employee->employee_no}}</td>
                                                        <td>{{$employee->first_name}}</td>
                                                        <td>{{$employee->middle_name}}</td>
                                                        <td>{{$employee->last_name}}</td>
                                                        {{-- <td>{{$employee->user->employee_id == null ? $employee->user->status : null}}</td> --}}
                                                        {{-- <td></td> --}}
                                                        <td>
                                                            <div style="margin-bottom:-9px;display:flex;">
                                                                <a href="{{url('employee/'.$employee->id)}}"  class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                                <a href="{{url('employee/'.$employee->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;
                                                                </a>

                                                                <form action="{{ url('employee/'.$employee->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Employee No</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
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