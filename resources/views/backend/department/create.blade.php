@extends('backend/layouts/master')

@section('title', 'Department | Create')

@section('main-content')
<div class="container-fluid">
@include('backend/layouts/alert_message')

    <div class="tab-content">
        <div class="tab-pane fade active show">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Department</h3>
                            <div class="card-options">
                                {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                            </div>
                        </div>
                        <form class="card-body" action="{{url('department')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12 first-column">
                                    <div class="form-group">
                                        <label>Department Name</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                        @error('name')
                                            <p><small class="text-danger">{{$errors->first('name')}}</small></p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <tr>
                                            <td>Designation Title</td>
                                        </tr>
                                        <tbody class="new-row">
                                        <tr>
                                            <td style="padding-right:10px;">
                                                <input type="text" name="title[]" class="form-control"/></td>
                                            <td>
                                                <button type="button" class="delete-row btn btn-default"><i style="color:red;" class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" id="add" class="mt-3 btn btn-sm btn-primary">+Add</button>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active show">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Departments</h3>
                            <div class="card-options">
                            </div>
                        </div>
                        <div style="padding:30px 30px;">
                            <table class="datatable table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Department Name</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody class="table-hover ">
                                    @foreach ($departments as $department)
                                        <tr>
                                            <td>{{$department->name}}</td>
                                            <td>
                                                <div style="margin-bottom:-9px;" class="option-btn">
                                                    <a href="{{url('department/'.$department->id.'/edit')}}" class="mb-1 btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> &nbsp;
                                                    <form action="{{ url('department/'.$department->id) }}" method="POST">
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
                                        <th>Department</th>
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
    $('#add').on('click', function(){
        var tr = '<tr>'+
                '<td style="padding-right:10px;"><input type="text" name="title[]" class="form-control"/></td>'+
                '<td><button type="button" class="delete-row btn btn-default"><i style="color:red;" class="fa fa-trash"></i></button></td>'+
                '</tr>';
            $('.new-row').append(tr);
    });

    $('.new-row').on('click', '.delete-row', function(){
         $(this).parent().parent().remove();
    });

</script>

@endpush
