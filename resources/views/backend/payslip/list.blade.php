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
                                                         <div style="margin-bottom:-9px;display:flex;" class="option-btn">
                                                            <a href="{{url('payslip/'.$payslip->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> &nbsp;
                                                            </a>
                                                            {{-- <form action="{{ url('payslip/'.$payslip->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" style="text-transform:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </form> --}}

                                                            <button type="button" class="btn btn-sm btn-secondary delete remove" data-id="{{url('payslip/'.$payslip->id)}}"><i class="fa fa-trash"></i></button>
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
