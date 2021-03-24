@extends('backend/layouts/master')

@section('title', 'Client | List')

@section('main-content')
    <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">All Clients</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            <a class="btn btn-sm btn-secondary mr-1" href="{{url('client/create')}}">Add Client</a>
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-hover ">
                                                @foreach ($clients as $client)
                                                    <tr>
                                                        <td>{{$client->full_name}}</td>
                                                        <td>{{$client->gender}}</td>
                                                        <td>{{$client->email}}</td>
                                                        <td>{{$client->country}}</td>
                                                        <td>
                                                            <div style="margin-bottom:-9px;" class="option-btn">
                                                                <a href="{{url('client-invoice/create/'.$client->id)}}" class="mb-1 btn btn-sm btn-primary">Create Invoice</a>
                                                                <br>
                                                                <a href="{{url('client/'.$client->id.'/edit')}}" class="mb-1 btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> &nbsp;
                                                                </a>
                                                                <form action="{{ url('client/'.$client->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
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
