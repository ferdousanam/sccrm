@extends('Admin.layouts.app')

@section('page_title', 'Edit User Type')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @include('Admin.msg.message')
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>Student Edit
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('admin.students.index') }}" style="margin-top:10px">
              View Student List
            </a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <!--begin::Form-->
              <form id="menu-form" action="{{ route('admin.students.update', $student->id) }}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group row">
                  <label for="full_name" class="col-md-2 control-label">
                    Full Name: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="full_name" name="full_name" value="{{ old('full_name', $student->full_name) }}" placeholder="Full Name" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="passport" class="col-md-2 control-label">
                    Passport: <span class="required"> </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="passport" name="passport" value="{{ old('passport', $student->passport) }}" placeholder="Passport">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="mobile_no" class="col-md-2 control-label">
                    Mobile No: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="{{ old('mobile_no', $student->mobile_no) }}" placeholder="Mobile No" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-2 control-label">
                    Email: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $student->email) }}" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="last_education" class="col-md-2 control-label">
                    Last Education: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="last_education" name="last_education" value="{{ old('last_education', $student->last_education) }}" placeholder="Last Education" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="last_education_result" class="col-md-2 control-label">
                    Last Education Result: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="last_education_result" name="last_education_result" value="{{ old('last_education_result', $student->last_education_result) }}" placeholder="Last Education Result" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="passing_year" class="col-md-2 control-label">
                    Passing Year: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" id="passing_year" name="passing_year" value="{{ old('passing_year', $student->passing_year) }}" placeholder="2000" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="interested_in" class="col-md-2 control-label">
                    Interested In: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="interested_in" name="interested_in" value="{{ old('interested_in', $student->interested_in) }}" placeholder="Program, Country" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ielts_score" class="col-md-2 control-label">
                    IELTS Score: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="ielts_score" name="ielts_score" value="{{ old('ielts_score', $student->ielts_score) }}" placeholder="number" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="remarks" class="col-md-2 control-label">
                    Remarks: <span class="required"> </span>
                  </label>
                  <div class="col-md-8">
                    <textarea name="remarks" id="remarks" class="form-control" rows="10" placeholder="Type Remarks">{{ old('remarks', $student->remarks) }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="priority_status" class="col-md-2 control-label">
                    Status: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <div class="mt-radio-inline">
                      <label class="mt-radio">
                        <input type="radio" name="status" value="1"
                          {{(old('status', $student->status) == 1) ? 'checked' : ''}}>
                        Active
                        <span></span>
                      </label>
                      <label class="mt-radio">
                        <input type="radio" name="status" value="0"
                          {{(old('status', $student->status) == 0) ? 'checked' : ''}}>
                        Inactive
                        <span></span>
                      </label>
                    </div>
                    <span class="form-text text-muted"></span>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 control-label"></label>
                  <div class="col-md-8">
                    <a href="{{ route('admin.user-type.index') }}" class="btn btn-primary">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
      $(document).ready(function () {
          $('#students-mm').addClass('open');
          $('#students-mm>ul').css('display', 'block');
          $('#students-mm>>.arrow').addClass('open');
          $('#students--edit-sm').addClass('active');
      });
  </script>
@endpush
