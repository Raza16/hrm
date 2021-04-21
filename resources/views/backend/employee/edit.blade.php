@extends('backend/layouts/master')

@section('title', 'Employee | Edit')

@section('main-content')
    <div class="container-fluid">
    @include('backend/layouts/alert_message')
        <div class="tab-content">
            <div class="tab-pane fade active show">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Employee</h3>
                                <div class="card-options">
                                    {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{url('employee/'.$employee->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 first-column">
                                        <h6>Employee Info</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Employee No</label>
                                            <input type="text" name="employee_no" class="form-control" value="{{ $employee->employee_no }}" readonly>
                                            @error('employee_no')
                                                <p><small class="text-danger">{{ $errors->first('employee_no') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name}}"/>
                                            @error('first_name')
                                                <p><small class="text-danger">{{ $errors->first('first_name') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control" value="{{ $employee->middle_name}}"/>
                                            @error('middle_name')
                                                <p><small class="text-danger">{{ $errors->first('middle_name') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name }}" />
                                            @error('last_name')
                                                <p><small class="text-danger">{{ $errors->first('last_name') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="date_of_birth" class="form-control" value="{{ $employee->date_of_birth }}">
                                            @error('date_of_birth')
                                                <p><small class="text-danger">{{ $errors->first('date_of_birth') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" name="gender" class="form-control" value="{{ $employee->gender }}"/>
                                            @error('gender')
                                                <p><small class="text-danger">{{ $errors->first('gender') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status</label>
                                            {{-- <input type="text" name="marital_status" class="form-control" value="{{ $employee->marital_status }}"/> --}}
                                            <select name="marital_status" class="form-control">
                                                <option value="unmarried" {{$employee->marital_status == 'unmarried' ? 'selected' : ''}}>unmarried</option>
                                                <option value="married" {{$employee->marital_status == 'married' ? 'selected' : ''}}>married</option>
                                            </select>
                                            @error('marital_status')
                                                <p><small class="text-danger">{{ $errors->first('marital_status') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <input type="text" name="qualification" class="form-control" value="{{ $employee->qualification }}"/>
                                            @error('qualification')
                                                <p><small class="text-danger">{{ $errors->first('qualification') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>CNIC</label>
                                            <input type="text" name="cnic" class="form-control" value="{{ $employee->cnic }}"/>
                                            @error('cnic')
                                                <p><small class="text-danger">{{ $errors->first('cnic') }}</small></p>
                                            @enderror
                                        </div>
                                        <h6>Employee Contact Details</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="text" name="mobile_no" class="form-control" value="{{ $employee->mobile_no }}"/>
                                            @error('mobile_no')
                                                <p><small class="text-danger">{{ $errors->first('mobile_no') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Home Phone </label>
                                            <input type="text" name="home_phone" class="form-control" value="{{ $employee->home_phone }}"/>
                                            @error('home_phone')
                                                <p><small class="text-danger">{{ $errors->first('home_phone') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Emergency Contact</label>
                                            <input type="text" name="emergency_contact" class="form-control" value="{{ $employee->emergency_contact }}"/>
                                            @error('emergency_contact')
                                                <p><small class="text-danger">{{ $errors->first('emergency_contact') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ $employee->email }}"/>
                                            @error('email')
                                                <p><small class="text-danger">{{ $errors->first('email') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Other Email</label>
                                            <input type="text" name="other_email" class="form-control" value="{{ $employee->other_email }}"/>
                                            @error('other_email')
                                                <p><small class="text-danger">{{ $errors->first('other_email') }}</small></p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 second-column">
                                    <h6>Employee Address</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="country" class="form-control" value="{{ $employee->country }}"/>
                                            @error('country')
                                                <p><small class="text-danger">{{ $errors->first('country') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Province/State</label>
                                            <input type="text" name="province_state" class="form-control" value="{{ $employee->province_state }}"/>
                                            @error('province_state')
                                                <p><small class="text-danger">{{ $errors->first('province_state') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control" value="{{ $employee->city }}"/>
                                            @error('city')
                                                <p><small class="text-danger">{{ $errors->first('city') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input type="text" name="nationality" class="form-control" value="{{ $employee->nationality }}"/>
                                            @error('nationality')
                                                <p><small class="text-danger">{{ $errors->first('nationality') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Postal/Zip Code</label>
                                            <input type="text" name="postal_code" class="form-control" value="{{ $employee->postal_code }}"/>
                                            @error('postal_code')
                                                <p><small class="text-danger">{{ $errors->first('postal_code') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" value="{{ $employee->address }}"/>
                                            @error('address')
                                                <p><small class="text-danger">{{ $errors->first('address') }}</small></p>
                                            @enderror
                                        </div>
                                        <h6>Employee Notes</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea rows="6"  name="notes" class="form-control">{{ $employee->notes }}</textarea>
                                            @error('notes')
                                                <p><small class="text-danger">{{ $errors->first('notes') }}</small></p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Profile Image</label>
                                            <div style="width:200px; height:200px;">
                                                <img style="max-width:100%; max-height:100%; display:block;" class="for-image" src="{{$employee->profile_image ? asset('img/profile-images/'.$employee->profile_image) : "https://via.placeholder.com/200x200?text=200+x+200"}}"/>
                                                <button type="button" style="background:#d9dee4; border-radius:0px;width:200px;cursor:pointer;font-size:12px;font-weight:600;" class="upload-button btn btn-default"><i style="font-size:14px;" class="fa fa-upload" aria-hidden="true"></i> &nbsp;Upload Image</button>
                                                <input style="display:none;" class="file-upload" type="file" name="profile_image" accept="image/*"/>
                                            </div>
                                            @error('profile_image')
                                                <p><small class="text-danger">{{ $errors->first('profile_image') }}</small></p>
                                            @enderror
                                        </div>

                                        <h6 style="margin:55px 0px 0px 0px;">Employee Documents</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Documents Attachment</label>
                                            <table class="table">
                                                <tr>
                                                    <th>File</th>
                                                    <th>Option</th>
                                                </tr>
                                                @foreach ($employeeDocuments as $docs)
                                                    <tr>
                                                        <td>{{$docs->file}}</td>
                                                        <td>
                                                            <a href="{{url('employee-doc/'.$docs->id.'/view')}}"><i style="color:red;" class="fa fa-eye"></i></a>
                                                            &nbsp;
                                                            <button type="button" style="background:none;border:none;outline:none;" class="deletedoc remove" data-id="{{url('employee-doc/'.$docs->id)}}"><i style="color:red;" class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                            <br>
                                            <table>
                                                <tbody class="new-row">
                                                <tr>
                                                    <td>
                                                        <input type="file" multiple name="file[]" class="form-control" accept="image/jpeg, image/jpg, image/png, .pdf, .doc, .docx"/>
                                                        @if ($errors->has('file'))
                                                            @foreach ($errors->get('file') as $error)
                                                            <p><small class="text-danger">{{ $error->first('file') }}</small></p>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

            {{----------------------------------Employee job history ------------------}}

            <div class="tab-pane fade active show">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employee Job Info</h3>
                                <div class="card-options">
                                    {{-- <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 first-column">
                                        <h6>Employee Job info</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <select name="designation_id" class="select2 form-control">
                                                <option></option>
                                                @foreach ($designations as $designation)
                                                    <option value="{{$designation->id}}" {{$designation->id ==  $employee->designation_id ? 'selected' : null}}>{{$designation->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('designation_id')
                                                <p><small class="text-danger">{{ $errors->first('designation_id') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="text" name="salary" class="form-control" value="{{$employee->salary}}"/>
                                            @error('salary')
                                                <p><small class="text-danger">{{ $errors->first('salary') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>joining_date</label>
                                            <input type="date" name="joining_date" class="form-control" value="{{$employee->joining_date}}"/>
                                            @error('joining_date')
                                                <p><small class="text-danger">{{ $errors->first('joining_date') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>ending_date</label>
                                            <input type="date" name="ending_date" class="form-control" value="{{$employee->ending_date}}"/>
                                            @error('ending_date')
                                                <p><small class="text-danger">{{ $errors->first('ending_date') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Supervisor</label>
                                            <select name="employee_id" class="select2 form-control">
                                                <option></option>
                                                @foreach ($emps as $emp)
                                                    <option value="{{$emp->id}}" {{$emp->id ==  $employee->employee_id ? 'selected' : null}}>{{$emp->first_name.' '.$emp->middle_name.' '.$emp->last_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('employee_id')
                                                <p><small class="text-danger">{{ $errors->first('employee_id') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Working Time Start</label>
                                            <input type="time" name="working_time_start" class="form-control" value="{{$employee->working_time_start}}"/>
                                            @error('working_time_start')
                                                <p><small class="text-danger">{{ $errors->first('working_time_start') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Working Time End</label>
                                            <input type="time" name="working_time_end" class="form-control" value="{{$employee->working_time_end}}"/>
                                            @error('working_time_end')
                                                <p><small class="text-danger">{{ $errors->first('working_time_end') }}</small></p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="color:red;">Termination Date</label>
                                            <input type="date" name="termination_date" class="form-control" value="{{$employee->termination_date}}"/>
                                            @error('termination_date')
                                                <p><small class="text-danger">{{ $errors->first('termination_date') }}</small></p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 second-column">
                                    <h6>Job Status</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label>Job Status</label>
                                            <select name="job_status" id="job-status" class="form-control">
                                                <option value="full time" {{$employee->job_status == 'full time' ? 'selected' : null}}>Full Time</option>
                                                <option value="part time" {{$employee->job_status == 'part time' ? 'selected' : null}}>Part Time</option>
                                                <option value="remote" {{$employee->job_status == 'remote' ? 'selected' : null}}>Remote</option>
                                                <option value="internship" {{$employee->job_status == 'internship' ? 'selected' : null}}>Internship</option>
                                            </select>
                                            @error('job_status')
                                                <p><small class="text-danger">{{ $errors->first('job_status') }}</small></p>
                                            @enderror
                                        </div>

                                        <div id="ip" style="{{$employee->job_status == 'internship' ? 'display:block;' : 'display:none;'}}">
                                        <div class="form-group">
                                            <label>Internship Period Start</label>
                                            <input type="date" id="ips" name="internship_period_start" class="form-control" value="{{$employee->internship_period_start}}"/>
                                            @error('internship_period_start')
                                                <p><small class="text-danger">{{ $errors->first('internship_period_start') }}</small></p>
                                            @enderror
                                            <button type="button" onclick="javascript:ips.value=''" style="border:none;outline:none;"><small>clear Internship Period Start date</small></button>
                                        </div>
                                        <div class="form-group">
                                            <label>Internship Period End</label>
                                            <input type="date" id="ipe" name="internship_period_end" class="form-control" value="{{$employee->internship_period_end}}"/>
                                            @error('internship_period_end')
                                                <p><small class="text-danger">{{ $errors->first('internship_period_end') }}</small></p>
                                            @enderror
                                            <button type="button" onclick="javascript:ipe.value=''" style="border:none;outline:none;"><small>clear Internship Period End date</small></button>
                                        </div>
                                        </div>

                                        <div id="pp" style="{{$employee->job_status == 'full time' || $employee->job_status == 'part time' || $employee->job_status == 'remote' ? 'display:block;' : 'display:none;'}}">
                                        <div class="form-group">
                                                <label>Probation Period Start</label>
                                                <input type="date" id="pps" name="probation_period_start" class="form-control" value="{{$employee->probation_period_start}}"/>
                                                @error('probation_period_start')
                                                <p><small class="text-danger">{{ $errors->first('probation_period_start') }}</small></p>
                                                @enderror
                                                <button type="button" onclick="javascript:pps.value=''" style="border:none;outline:none;"><small>clear Probation Period Start date</small></button>
                                        </div>

                                        <div class="form-group">
                                            <label>Probation Period End</label>
                                            <input type="date" id="ppe" name="probation_period_end" class="form-control" value="{{$employee->probation_period_end}}"/>
                                            @error('probation_period_end')
                                                <p><small class="text-danger">{{ $errors->first('probation_period_end') }}</small></p>
                                            @enderror
                                            <button type="button" onclick="javascript:ppe.value=''" style="border:none;outline:none;"><small>clear Probation Period End date</small></button>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        <a href="{{url('employee')}}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
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
    $("#job-status").change( function() {
    var selectedValue = $(this).val();

    if (selectedValue == "internship") {
        $('#ip').show();
        $('#pp').hide();
    }
    else if(selectedValue == "full time"){
        $('#pp').show();
        $('#ip').hide();
    }
    else{
        $('#pp').show();
        $('#ip').hide();
    }

});
</script>

<script>

$(".deletedoc").click('.remove',function(){

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
