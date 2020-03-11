@extends('Admin.layouts.app')

@section('page_title', 'Users')
@section('page_tagline', 'All Users')

@push('css')
  <!-- Datatables -->
  <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet">
@endpush

@section('page_title', 'Users')
@section('page_tagline', '')

@section('content')
  <div class="row">
    <div class="col-md-12">
    @include('Admin.components.delete-modal')
    @include('Admin.msg.message')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet light bordered">

        <div class="portlet-title">
          <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">System User List </span>
          </div>

          <div class="col-md-6"><p id="confirm_msg"></p></div>
            <?php /*?>
          <div class="actions">

            <div class="btn-group">
              <a class="btn purple btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                <i class="fa fa-list"></i>
                <span> Options </span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu" id="sample_3_tools">
                <li>
                  <a onclick="return Enable();"><i class="icon-pencil"></i> Enable</a>
                </li>
                <li>
                  <a onclick="return Disable();"><i class="icon-trash"></i> Disable</a>
                </li>

              </ul>
            </div>

            <div class="btn-group">
              <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                <i class="fa fa-gears"></i>
                <span> Tools </span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu pull-right" id="sample_3_tools">
                <li>
                  <a href="javascript:;" data-action="0" class="tool-action">
                    <i class="icon-printer"></i> Print</a>
                </li>

                <li>
                  <a href="javascript:;" data-action="2" class="tool-action">
                    <i class="icon-doc"></i> PDF</a>
                </li>
                <li>
                  <a href="javascript:;" data-action="3" class="tool-action">
                    <i class="icon-paper-clip"></i> Excel</a>
                </li>
              </ul>
            </div>
          </div>
          <?php */ ?>
          <div class="tools"></div>
        </div>
        <div class="portlet-body">
          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{URL::to('')}}" id="data_form">
          {{ csrf_field() }}


          <!--begin: Datatable -->
          {!! $dataTable->table(['class' => 'table table-striped- table-bordered table-hover dataTable no-footer dtr-inline'], true) !!}

          <!--end: Datatable -->

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  @include('Admin.scripts.delete')
  <script type="text/javascript">
      $(document).ready(function () {
          $('#people-mm').addClass('open');
          $('#people-mm>ul').css('display', 'block');
          $('#people-mm>>.arrow').addClass('open');
          $('#user-sm').addClass('active');
      });
  </script>
  <!-- Datatables -->
{{--  <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>--}}
  <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}" type="text/javascript"></script>
  {!! $dataTable->scripts() !!}
@endpush
