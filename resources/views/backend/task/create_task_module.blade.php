@extends('backend/layouts/master')

@section('title', 'Task Module | Create')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Task Modules</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{url('task-module')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 first-column">
                                                <div class="form-group">
                                                    <label>Module Name</label>
                                                    <input type="text" name="module" class="form-control" value="{{old('module')}}">
                                                    @error('module')
                                                        <p><small class="text-danger">{{ $errors->first('module') }}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ./row --}}
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        {{-- /row --}}
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{------------------- Task Modules ----------------}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Task Modules</h3>
                                        <div class="card-options">
                                            {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div style="padding:30px 30px;">
                                            <table class="datatable table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Modules</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-hover">
                                                    @foreach ($taskModules as $taskModule)
                                                        <tr id="mid{{$taskModule->id}}" class="tableReload">
                                                            <td class="taskmodule">{{$taskModule->module}}</td>
                                                            <td>
                                                                <div style="margin-bottom:-9px;display:flex;" class="option-btn">
                                                                    <a href="javascript:void(0)" onclick="editModule({{$taskModule->id}})" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    &nbsp;
                                                                    <button type="button" class="btn btn-sm btn-secondary delete remove" data-id="{{url('task-module/'.$taskModule->id)}}"><i class="fa fa-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <form id="moduleFormEdit">
                                                                    @csrf
                                                                    <input type="hidden" id="id" name="id"/>
                                                                    <div class="form-group">
                                                                        <label>Module</label>
                                                                        <input type="text" class="form-control" id="module" name="module" />
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Modules</th>
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
            </div>
@endsection

@push('scripts')

<script>
    function editModule(id){
        $.get('/task-module/'+id, function(taskModule){
            $('#id').val(taskModule.id);
            $('#module').val(taskModule.module);
            $('#updateModal').modal('toggle');
        });
    }

    $('#moduleFormEdit').submit(function(e){
        e.preventDefault();

        let id = $('#id').val();
        let module = $('#module').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            url: "{{url('task-module')}}"+"/"+id,
            type: "PUT",
            data: {
                id:id,
                module:module,
                _token:_token,
            },
            success:function(response){
                // $('#mid' + response.id +' td:nth-child(1)').text(response.module);
                $('.taskmodule').text(response.module);
                $('#updateModal').modal('toggle');
                alert('Record has been updated!');
                $('#moduleFormEdit')[0].reset();
            }
        })
    });


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
