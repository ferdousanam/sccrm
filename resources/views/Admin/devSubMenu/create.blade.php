@extends('Admin.layouts.app')

@section('page_title', 'Create Sub Menu')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @include('Admin.msg.message')
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>Create Sub Menu
          </div>
          <div style="float:right">
            <a class="btn btn-xs btn-primary" href="{{ route('sub-menu.index') }}" style="margin-top:10px">View Sub Menus</a>
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <!--begin::Form-->
              <form id="menu-form" action="{{ route('sub-menu.store') }}" method="POST" class="form-horizontal">
                @csrf

                <div class="form-group row">
                  <label for="serial_no" class="col-md-2 control-label">
                    Serial No <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="serial_no" name="serial_no" value="{{ old('serial_no') }}" placeholder="Serial No." required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="parent_id" class="col-md-2 control-label">
                    Parent Menu <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <select name="parent_id" id="parent_id" class="form-control chosen" required>
                      <option>Select Parent Menu</option>
                      @if(isset($main_menus) && count($main_menus)>0)
                        @foreach ($main_menus as $main_menu)
                          <option value="{{$main_menu->id}}">{{$main_menu->menu_name}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="menu_name" class="col-md-2 control-label">
                    Menu Title <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="menu_name" name="menu_name" value="{{ old('menu_name') }}" placeholder="Menu Title" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="selector" class="col-md-2 control-label">
                    Selector <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="selector" name="selector" value="{{ old('selector') }}" placeholder="Menu ID Selector" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="route_name" class="col-md-2 control-label">
                    Route Url <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="route_name" name="route_name" value="{{ old('route_name') }}" placeholder="Route Url" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="icon" class="col-md-2 control-label">
                    Icon Name
                  </label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="icon" name="icon" value="{{ old('icon') }}" placeholder="fa fa-home">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-md-2 control-label">
                    Status <span class="required">* </span>
                  </label>
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
                    <a href="{{ route('sub-menu.index') }}" class="btn btn-primary">Cancel</a>
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
          $('#sub-menus--create-sm').addClass('active');
      });
  </script>
@endpush
