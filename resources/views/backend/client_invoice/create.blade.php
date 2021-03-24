@extends('backend/layouts/master')

@section('title', 'Client Invoice | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')

                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Invoice</h3>
                                        <div class="card-options">
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('client-invoice')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Invoice No</label>
                                                    @if (isset($newInvoiceNo))
                                                    <input type="text" name="invoice_no" class="form-control" value="{{$newInvoiceNo}}" readonly>
                                                    @endif
                                                    @error('invoice_no')
                                                        <p><small class="text-danger">{{ $errors->first('invoice_no') }}</small></p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Bill To</label>
                                                    @if (isset($clients))
                                                    <select name="client_id" class="form-control select2">
                                                        <option></option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{$client->id}}">{{$client->full_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @endif

                                                    @if (isset($clientFullname))
                                                        <p class="form-control">{{$clientFullname->full_name}}</p>
                                                        <input type="hidden" class="form-control" name="client_id" value="{{$clientFullname->id}}" />
                                                    @endif
                                                    @error('client_id')
                                                        <p><small class="text-danger">{{ $errors->first('client_id') }}</small></p>
                                                    @enderror
                                                </div>
                                                <p><b>Billing Period</b></p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>From Date</label>
                                                            <input type="date" name="from_date" class="form-control" value="{{old('from_date')}}">
                                                            @error('from_date')
                                                                <p><small class="text-danger">{{ $errors->first('from_date') }}</small></p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>To Date</label>
                                                            <input type="date" name="to_date" class="form-control" value="{{old('to_date')}}">
                                                            @error('to_date')
                                                                <p><small class="text-danger">{{ $errors->first('to_date') }}</small></p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <table class="table">
                                                    <tr>
                                                        <th>Description and Miscellaneous Work</th>
                                                        <th>Quantity</th>
                                                        <th>Rate</th>
                                                        <th>Total</th>
                                                        <th>option</th>
                                                    </tr>
                                                    <tbody class="new-row">
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="description[]" /></td>
                                                        <td><input type="text" class="form-control qty" name="quantity[]" /></td>
                                                        <td><input type="text" class="form-control rate" name="rate[]" /></td>
                                                        <td><input type="text" class="form-control total" name="total[]" /></td>
                                                        <td><button type="button" class="delete-row btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" id="add" class="mt-3 btn btn-sm btn-primary">+Add</button>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Notes</label>
                                                    <textarea type="text" rows="5" name="notes" class="form-control">{{old('notes')}}</textarea>
                                                    @error('notes')
                                                        <p><small class="text-danger">{{ $errors->first('notes') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <table  style="float: right;">
                                                    <tr>
                                                        <td style="padding-right:140px;">Discount</td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" id="discount" name="discount"/>
                                                            @error('discount')
                                                                <p><small class="text-danger">{{ $errors->first('discount') }}</small></p>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Grand Total</b></td>
                                                        <td><input type="text" class="form-control form-control-sm" id="grand_total" name="grand_total" /></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>What kind of job is this?</label>
                                                     <select class="form-control" name="task_module_id">
                                                         @foreach ($modules as $module)
                                                            <option value="{{$module->id}}">{{$module->module}}</option>
                                                         @endforeach
                                                     </select>
                                                    @error('task_module_id')
                                                        <p><small class="text-danger">{{ $errors->first('task_module_id') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{url('role')}}" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('scripts')
    <script>
    $('#add').on('click', function(){
        var tr ='<tr>'+
                    '<td><input type="text" class="form-control" name="description[]" /></td>'+
                    '<td><input type="text" class="form-control qty" name="quantity[]" /></td>'+
                    '<td><input type="text" class="form-control rate" name="rate[]" /></td>'+
                    '<td><input type="text" class="form-control total" name="total[]" /></td>'+
                    '<td><button type="button" class="delete-row btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></td>'+
                '</tr>';

            $('.new-row').append(tr);
    });

    $('.new-row').on('click', '.delete-row', function(){
         $(this).parent().parent().remove();
         total();
    });

    function cal(){
        $('.new-row').on('.qty, .rate', 'keyup', function() {
            var tr = $(this).parent().parent();
            var qty = tr.find('.qty').val();
            var rate = tr.find('.rate').val();
            var total = qty * rate;
            tr.find('.total').val(total.toFixed(2));
            total();
        });
    }

    function total(){
         var total = 0;
         $('.total').each(function(i,e){
             grand_total += $(this).val() - 0;
         });
         $("#grand_total").val(grand_total.toFixed(2));
    }



    </script>
@endpush
