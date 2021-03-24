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
                                        <h3 class="card-title">Client Invoices</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                            <a class="btn btn-sm btn-secondary mr-1" href="{{url('client-invoice/create')}}">Add Invoice</a>
                                        </div>
                                    </div>
                                    <div style="padding:30px 30px;">
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Client</th>
                                                    <th>Invoice No</th>
                                                    <th>Billing Period</th>
                                                    <th>Discount</th>
                                                    <th>Grand Total</th>
                                                    <th>Services</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-hover">
                                                @foreach ($clientInvoices as $clientInvoice)
                                                    <tr>
                                                        <td>{{$clientInvoice->client->full_name}}</td>
                                                        <td>{{$clientInvoice->invoice_no}}</td>
                                                        <td><b>From:</b> {{date('j F, Y', strtotime($clientInvoice->from_date))}} <br> <b>To:</b>{{date('j F, Y', strtotime($clientInvoice->to_date))}}</td>
                                                        <td>{{$clientInvoice->discount}}</td>
                                                        <td>{{$clientInvoice->grand_total}}</td>
                                                        <td>{{$clientInvoice->task_module->module}}</td>
                                                        <td>
                                                            <div style="margin-bottom:-9px;display:flex;" class="option-btn">
                                                                {{-- <a href="{{url('client-invoice/'.$clientInvoice->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp; --}}

                                                                <a href="{{url('client-invoice/'.$clientInvoice->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> &nbsp;

                                                                {{-- <form action="{{ url('client-invoice/'.$clientInvoice->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </form> --}}
                                                                <button type="button" class="btn btn-sm btn-secondary delete remove" data-id="{{url('client-invoice/'.$clientInvoice->id)}}"><i class="fa fa-trash"></i></button>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Role Type</th>
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

@push('scripts')

<script>
$(".delete").click('.remove',function(){

    var dataId = $(this).attr("data-id");
    var del = this;
    if(confirm("Do you want to delete this record?")){
        $.ajax({
        url:dataId,
        type:'DELETE',
        data:{
        _token : $("input[name=_token]").val()
        },
        success:function(response){
            $(del).closest( "tr" ).remove();
            alert(response.message);
        }
        });
    }
    });
</script>

@endpush
