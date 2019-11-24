@extends('Admin.layouts.app')

@section('page_title', 'Edit User')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @include('Admin.msg.message')
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>Update System User
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('user.index') }}" style="margin-top:10px">View System
              User</a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('user.update', $user->id) }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                @method('PUT')
                @csrf

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Name : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <input type="text" class="form-control span10" id="name" name="name" value="{{old('name', $user->name)}}" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      E-Mail : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <input type="email" class="form-control span10" id="email" name="email" value="{{old('email', $user->email)}}" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Password : <span class="required"> </span>
                    </label>

                    <div class="col-md-8">
                      <input type="password" class="form-control span10" name="password" value="{{old('password')}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Update Password : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <div class="mt-radio-inline">
                        <label class="mt-radio">
                          <input type="radio" name="update_password" value="1">
                          Update Password
                          <span></span>
                        </label>
                        <label class="mt-radio">
                          <input type="radio" name="update_password" value="0" checked>
                          Don't Update Password
                          <span></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      User Priority Level : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <select name="user_level" id="user_level" class="form-control chosen" required>
                        <option value="">Select Priority Level</option>
                        @if(isset($priority) && count($priority)>0)
                          @foreach ($priority as $pr)
                            <option value="{{$pr->id}}" {{ ($pr->id == old('user_level', $user->user_level))? 'selected' : '' }}
                            >{{$pr->priority_name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Status : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <div class="mt-radio-inline">
                        <label class="mt-radio">
                          <input type="radio" name="status" value="1"
                            {{(old('status', $user->status) == 1) ? 'checked' : ''}}>
                          Active
                          <span></span>
                        </label>
                        <label class="mt-radio">
                          <input type="radio" name="status" value="0"
                            {{(old('status', $user->status) == 0) ? 'checked' : ''}}>
                          Inactive
                          <span></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">
                  </label>
                  <div class="col-md-8">
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
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
      $(document).ready(function () {
          $('#people-mm').addClass('open');
          $('#people-mm>ul').css('display', 'block');
          $('#people-mm>>.arrow').addClass('open');
          $('#user--edit-sm').addClass('active');
      });
  </script>
@endpush
