@extends('Admin.layouts.app')

@section('page_title', 'Create Main Menu')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @include('Admin.msg.message')
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>Create Main Menu
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('main-menu.index') }}" style="margin-top:10px">View Main
              Menus</a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <!--begin::Form-->
              <form id="menu-form" action="{{ route('main-menu.store') }}" method="POST" class="form-horizontal">
                @csrf

                <div class="form-group row">
                  <label for="serial_no" class="col-md-2 control-label">Serial No
                    <span class="required">* </span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="serial_no" name="serial_no" value="{{ old('serial_no') }}" placeholder="Serial No." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu_name" class="col-md-2 control-label">Menu Title
                    <span class="required">* </span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="menu_name" name="menu_name" value="{{ old('menu_name') }}" placeholder="Menu Title" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="route_name" class="col-md-2 control-label">Route Url
                    <span class="required">* </span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="route_name" name="route_name" value="{{ old('route_name') }}" placeholder="Route Url" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="selector" class="col-md-2 control-label">Selector <span class="required">* </span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="selector" name="selector" value="{{ old('selector') }}" placeholder="Menu ID Selector" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="icon" class="col-md-2 control-label">Icon Name</label>
                  <div class="col-md-8">
                    <div class="input-icon">
                      <i class="{{ old('icon', 'fa fa-home') }} font-green"></i>
                      <input type="text" class="form-control" id="icon" name="icon" placeholder="fa fa-home" value="{{ old('icon') }}" aria-describedby="icon">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-md-2 control-label">Status <span class="required">* </span></label>
                  <div class="col-md-8">
                    <div class="mt-radio-inline">
                      <label class="mt-radio">
                        <input type="radio" name="status" value="1"
                          {{(old('status') !== 0) ? 'checked' : ''}}>
                        Active
                        <span></span>
                      </label>
                      <label class="mt-radio">
                        <input type="radio" name="status" value="0"
                          {{(old('status') === 0) ? 'checked' : ''}}>
                        Inactive
                        <span></span>
                      </label>
                    </div>
                    <span class="form-text text-muted"></span>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 control-label">
                  </label>
                  <div class="col-md-8">
                    <a href="{{ route('main-menu.index') }}" class="btn btn-primary">Cancel</a>
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
          $('#main-menus--create-sm').addClass('active');
      });
  </script>
@endpush
