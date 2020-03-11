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
            <i class="fa fa-globe"></i>Update Priority Level
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('user-type.index') }}" style="margin-top:10px">View User
              Types</a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <!--begin::Form-->
              <form id="menu-form" action="{{ route('user-type.update', $user_type->id) }}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group row">
                  <label for="priority_name" class="col-md-2 control-label">
                    User Type: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="priority_name" name="priority_name" value="{{ old('priority_name', $user_type->priority_name) }}" placeholder="User Type" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="priority_description" class="col-md-2 control-label">
                    Description: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <textarea name="priority_description" id="priority_description" class="form-control" rows="10" placeholder="Type Description">{{ old('priority_description', $user_type->priority_description) }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="priority_status" class="col-md-2 control-label">
                    Status: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <div class="mt-radio-inline">
                      <label class="mt-radio">
                        <input type="radio" name="priority_status" value="1"
                          {{(old('priority_status', $user_type->priority_status) == 1) ? 'checked' : ''}}>
                        Active
                        <span></span>
                      </label>
                      <label class="mt-radio">
                        <input type="radio" name="priority_status" value="0"
                          {{(old('priority_status', $user_type->priority_status) == 0) ? 'checked' : ''}}>
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
                    <a href="{{ route('user-type.index') }}" class="btn btn-primary">Cancel</a>
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
          $('#dev-forms-mm').addClass('open');
          $('#dev-forms-mm>ul').css('display', 'block');
          $('#dev-forms-mm>>.arrow').addClass('open');
          $('#user-types--edit-sm').addClass('active');
      });
  </script>
@endpush
