@extends('layouts.master')
@section('title', 'Add Employee')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>

<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>

<link  rel="stylesheet" href="{{asset('assets/plugins/ssi-uploader/dist/ssi-uploader/styles/ssi-uploader.min.css')}}"/>
@stop
@section('content')

@include('layouts.alert_message')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Add Employee</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{url('employee')}}">All Employee</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{url('employee')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h6>Basic Info</h6>
                        <hr>
                        <label>Employee No</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" name="employee_no" value="{{$newEmployeeNo}}" readonly>
                        </div>

                        <label>First Name</label>
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control form-control-sm form-float" value="{{old('first_name')}}">
                            @error('first_name')
                                <label class="error">{{$errors->first('first_name')}}</label>
                            @enderror
                        </div>

                        <label>Middle Name</label>
                        <div class="form-group">
                            <input type="text" name="middle_name" class="form-control form-control-sm" value="{{old('middle_name')}}">
                            @error('middle_name')
                                <label class="error">{{$errors->first('middle_name')}}</label>
                            @enderror
                        </div>

                        <label>Last Name</label>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control form-control-sm" value="{{old('last_name')}}">
                            @error('last_name')
                                <label class="error">{{$errors->first('last_name')}}</label>
                            @enderror
                        </div>

                        <label>Date of Birth</label>
                        <div class="form-group">
                            <input type="date" name="date_of_birth" class="form-control date" placeholder="dd/mm/yyyy" value="{{old('date_of_birth')}}">
                        </div>

                        <label>Gender</label>
                        <div class="form-group">
                            <div class="radio inlineblock m-r-20">
                                <input type="radio" name="gender" id="Male" class="with-gap" value="male" {{old('gender') == 'male' ? 'checked':null}}>
                                <label for="Male">Male</label>
                            </div>
                            <div class="radio inlineblock">
                                <input type="radio" name="gender" id="Female" class="with-gap" value="female" {{old('gender') == 'female' ? 'checked':null}}>
                                <label for="Female">Female</label>
                            </div>
                            <br>
                            @error('gender')
                                <label class="error">{{$errors->first('gender')}}</label>
                            @enderror
                        </div>

                        <label>Marital Status</label>
                        <div class="form-group">
                            <select name="marital_status" class="form-control form-control-sm show-tick">
                                <option value="unmarried" {{old('marital_status') == 'unmarried' ? 'selected':null}}>Unmarried</option>
                                <option value="married" {{old('marital_status') == 'married' ? 'selected':null}}>Married</option>
                            </select>
                        </div>

                        <label>Qualification</label>
                        <div class="form-group">
                            <input type="text" name="qualification" class="form-control form-control-sm" value="{{old('qualification')}}">
                        </div>

                        <label>CNIC <small>(without dash)</small></label>
                        <div class="form-group">
                            <input type="number" name="cnic" minlength="14" class="form-control form-control-sm" placeholder="Ex:42101542517561" value="{{old('cnic')}}">
                            @error('cnic')
                                <label class="error">{{$errors->first('cnic')}}</label>
                            @enderror
                        </div>

                        <h6>Contact Details</h6>
                        <hr>
                        <label>Mobile No</label>
                        <div class="form-group">
                            <input type="number" name="mobile_no" class="form-control form-control-sm" value="{{old('mobile_no')}}">
                            @error('mobile_no')
                                <label class="error">{{$errors->first('mobile_no')}}</label>
                            @enderror
                        </div>

                        <label>Home Phone</label>
                        <div class="form-group">
                            <input type="text" name="home_phone" class="form-control form-control-sm" value="{{old('home_phone')}}">
                        </div>

                        <label>Emergency Contact</label>
                        <div class="form-group">
                            <input type="number" name="emergency_contact" class="form-control form-control-sm" value="{{old('emergency_contact')}}">
                        </div>

                        <label>Email</label>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-sm" value="{{old('email')}}">
                            @error('email')
                                <label class="error">{{$errors->first('email')}}</label>
                            @enderror
                        </div>

                        <label>Other Email</label>
                        <div class="form-group">
                            <input type="email" name="other_email" class="form-control form-control-sm" value="{{old('other_email')}}">
                        </div>

                        <h6>Job info</h6>
                        <hr>
                        <label>Designation</label>
                        <div class="form-group">
                            <select name="designation_id" class="form-control show-tick ms select2" data-placeholder="Select" >
                                <option></option>
                                @foreach ($designations as $designation)
                                <option value="{{$designation->id}}" {{old('designation_id') == $designation->id ? 'selected':null}}>{{$designation->title}}</option>
                                @endforeach
                            </select>
                            @error('designation_id')
                                <label class="error">{{$errors->first('designation_id')}}</label>
                            @enderror
                        </div>

                        <label>Salary</label>
                        <div class="form-group">
                            <input type="number" name="salary" class="form-control form-control-sm" value="{{old('salary')}}">
                            @error('salary')
                                <label class="error">{{$errors->first('salary')}}</label>
                            @enderror
                        </div>

                        <label>Joining Date</label>
                        <div class="form-group">
                            <input type="date" name="joining_date" class="form-control" placeholder="dd/mm/yyyy" value="{{old('joining_date')}}">
                        </div>

                        <label>Ending Date</label>
                        <div class="form-group">
                            <input type="date" name="ending_date" class="form-control" placeholder="dd/mm/yyyy" value="{{old('ending_date')}}">
                        </div>

                        <label>Supervisor</label>
                        <div class="form-group">
                            <select name="employee_id" class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}" {{old('employee_id') == $employee->id ? 'selected':null}}>{{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                <label class="error">{{$errors->first('employee_id')}}</label>
                            @enderror
                        </div>

                        <label>Working Time Start</label>
                        <div class="form-group">
                            <input type="time" name="working_time_start" class="form-control" placeholder="Ex: 11:59 pm" value="{{old('working_time_start')}}">
                        </div>

                        <label>Working Time End</label>
                        <div class="form-group">
                            <input type="time" name="working_time_end" class="form-control" placeholder="Ex: 11:59 pm" value="{{old('working_time_end')}}">
                        </div>

                        <label style="color:red;">Termination Date</label>
                        <div class="form-group">
                            <input type="date" name="termination_date" class="form-control" placeholder="dd/mm/yyyy" value="{{old('termination_date')}}">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h6>Address</h6>
                        <hr>
                        <label>Country</label>
                        <div class="form-group">
                            <input type="text" name="country" class="form-control form-control-sm" value="{{old('country')}}">
                        </div>

                        <label>Province/State</label>
                        <div class="form-group">
                            <input type="text" name="province_state" class="form-control form-control-sm" value="{{old('province_state')}}">
                        </div>

                        <label>City</label>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control form-control-sm" value="{{old('city')}}">
                        </div>

                        <label>Nationality</label>
                        <div class="form-group">
                            <input type="text" name="nationality" class="form-control form-control-sm" value="{{old('nationality')}}">
                        </div>

                        <label>Postal/Zip Code</label>
                        <div class="form-group">
                            <input type="number" name="postal_code" class="form-control form-control-sm" value="{{old('postal_code')}}">
                        </div>

                        <label>Address</label>
                        <div class="form-group">
                            <textarea type="text" name="address" class="form-control form-control-sm">{{old('address')}}</textarea>
                        </div>

                        <h6>Notes</h6>
                        <hr>
                        <textarea class="summernote" name="notes">{{old('notes')}}</textarea>
                        <br>

                        <h6>Document Attachment</h6>
                        <hr>
                        <div class="form-group">
                            <label>File Attachment</label>
                            <input type="file" name="file[]" multiple id="ssi-upload" accept=".docx, .doc, .pdf, .csv, .png, .jpeg, .jpg, .pptx, .xls, .xlsx"/>
                        </div>

                        <h6>Profile Image</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" name="profile_image" class="dropify" data-allowed-file-extensions="png jpg jpeg">
                                </div>
                            </div>
                        </div>

                        <h6>Job Status</h6>
                        <hr>
                        <label>Job Status</label>
                        <div class="form-group">
                            <select name="job_status" id="job-status" class="form-control form-control-sm show-tick">
                                <option value="Full Time" {{old('job_status') == 'Full Time' ? 'selected':null}}>Full Time</option>
                                <option value="Part Time" {{old('job_status') == 'Part Time' ? 'selected':null}}>Part Time</option>
                                <option value="Remote" {{old('job_status') == 'Remote' ? 'selected':null}}>Remote</option>
                                <option value="Internship" {{old('job_status') == 'Internship' ? 'selected':null}}>Internship</option>
                            </select>
                            @error('job_status')
                                <label class="error">{{$errors->first('job_status')}}</label>
                            @enderror
                        </div>

                        <div id="ip" style="display:none;">
                        <label>Internship Period Start</label>
                        <div class="form-group input-group masked-input">
                            <input type="date" name="internship_period_start" class="form-control" placeholder="dd/mm/yyyy" value="{{old('internship_period_start')}}">
                        </div>

                        <label>Internship Period End</label>
                        <div class="form-group">
                            <input type="date" name="internship_period_end" class="form-control" placeholder="dd/mm/yyyy" value="{{old('internship_period_end')}}">
                        </div>
                        </div>

                        <div id="pp">
                        <label>Probation Period Start</label>
                        <div class="form-group">
                            <input type="date" name="probation_period_start" class="form-control" placeholder="dd/mm/yyyy" value="{{old('probation_period_start')}}">
                        </div>

                        <label>Probation Period End</label>
                        <div class="form-group">
                            <input type="date" name="probation_period_end" class="form-control" placeholder="dd/mm/yyyy" value="{{old('probation_period_end')}}">
                        </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop


@section('page-script')
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<script src="{{asset('assets/plugins/ssi-uploader/dist/ssi-uploader/js/ssi-uploader.min.js')}}"></script>

<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>
<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
@stop

@push('after-scripts')
<script>
    $("#job-status").change( function() {
    var selectedValue = $(this).val();

    if (selectedValue == "Internship") {
        $('#ip').show();
        $('#pp').hide();
    }
    else if(selectedValue == "Full Time"){
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
    $('#ssi-upload').ssi_uploader({
        allowed: ['png', 'jpg', 'jpeg', 'pdf', 'txt', 'doc', 'docx', 'xls', 'csv', 'xlsx', 'pptx'],
        errorHandler: {
            method: function (msg, type) {
                ssi_modal.notify(type, {content: msg});
            },
            success: 'success',
            error: 'error'
        },
        maxFileSize: 122//mb
    });
</script>
@endpush

