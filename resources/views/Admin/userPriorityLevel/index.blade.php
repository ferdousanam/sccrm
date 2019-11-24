@extends('Admin.layouts.app')

@push('css')

@endpush

@section('page_title', 'User Priority Level')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
    @include('Admin.msg.message')
    <!--start::Portlet-->
      <div class="portlet box grey-cascade">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-globe"></i>User Priority Level
          </div>

        </div>
        <div class="portlet-body">
          <div class="table-toolbar">
            <div class="row">

              <!--begin::Form-->
              <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('user-priority-level.update',1) }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                @method('PUT')
                @csrf

                <div class="form-group">
                  <label class="col-md-2 control-label">
                    Priority Name: <span class="required">* </span>
                  </label>
                  <div class="col-md-8">
                    <select name="priority_id" id="priority_id" class="form-control chosen" required onchange="getAppModuleView();">
                      <option value="">Select A Priority</option>
                      @if(isset($priority) && count($priority)>0)
                        @foreach ($priority as $pr)
                          <option value="{{$pr->id}}">{{$pr->priority_name}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="row" id="appmodule_view"></div>

                <div class="form-group">
                  <label class="col-md-2 control-label">
                  </label>
                  <div class="col-md-8">
                    <input type="submit" value="Save" class="btn btn-success">
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
      <!--end::Portlet-->
    </div>
  </div>

@endsection
@push('scripts')
  <script type="text/javascript">
      $('#people-mm').addClass('open');
      $('#people-mm>ul').css('display', 'block');
      $('#people-mm>>.arrow').addClass('open');
      $('#user-priority-level-sm').addClass('active');
      var appModuleView = $('#appmodule_view');

      function getAppModuleView() {
          $('.kt-portlet__foot').hide();
          appModuleView.html('<h4 class="text-center">Loading...</h4>');
          var pr_id = $('#priority_id').val();
          if (pr_id !== "") {
              $.ajax({
                  url: "{{ route('user-priority-level.index') }}/" + pr_id,
                  type: 'GET',
                  data: {},
                  success: function (data) {
                      $('#appmodule_view').html(data);
                  }
              }).done(function () {
                  $('.kt-portlet__foot').show();
              });

          } else {
              appModuleView.html('<h4 class="text-center text-danger">Please Select User Type Name</h4>');
          }
      }
  </script>
@endpush
