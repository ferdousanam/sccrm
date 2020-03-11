@extends('Admin.layouts.app')

@section('page_title', 'Add New User')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @include('Admin.msg.message')
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>Create System User
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('user.index') }}" style="margin-top:10px">View System User</a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('user.store') }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                @csrf

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Name : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <input type="text" class="form-control span10" id="name" name="name" value="{{old('name')}}" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      E-Mail : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <input type="email" class="form-control span10" id="email" name="email" value="{{old('email')}}" required>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <div>
                    <label class="col-md-2 control-label">
                      Password : <span class="required">* </span>
                    </label>

                    <div class="col-md-8">
                      <input type="password" class="form-control span10" name="password" value="{{old('password')}}" required>
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
                        <option value="">Select User Level</option>
                        @if(isset($priority) && count($priority)>0)
                          @foreach ($priority as $pr)
                            <option value="{{$pr->id}}">{{$pr->priority_name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
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
          $('#user--create-sm').addClass('active');
      });
  </script>
@endpush
