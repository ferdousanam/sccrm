@extends('Admin.layouts.app')

@push('css')
  <!-- Datatables -->
  <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet">
@endpush

@section('page_title', 'Main Menu')
@section('page_tagline', '')

@section('content')
  @include('Admin.components.delete-modal')
  <div class="row">
    <div class="col-md-12">
    @include('Admin.msg.message')

    <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet light bordered">
        <div class="portlet-title">
          <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase" id="hidden_table_title">MainMenu Information</span>
          </div>

          <div class="col-md-6"><p id="confirm_msg"></p></div>
          <div class="actions">
            <div class="btn-group">
              <a class="btn purple btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                <i class="fa fa-list"></i>
                <span> Options </span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu" id="sample_3_tools">
                <li>
                  <a href="{{ route('main-menu.create') }}">
                    <i class="fa fa-plus"></i> Add New</a>
                </li>
                <li>
                  <a onclick="return Edit();">
                    <i class="fa fa-pencil"></i> Edit</a>
                </li>
                <li>
                  <a onclick="return Delete();">
                    <i class="icon-trash"></i> Delete</a>
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

          <div class="tools"></div>
        </div>
        <div class="portlet-body">
          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{URL::to('')}}" name="basic_validate" id="data_form">
          {{ csrf_field() }}

          <!--begin: Datatable -->
          {!! $dataTable->table(['class' => 'table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline'], true) !!}

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
          $('#dev-forms-mm').addClass('open');
          $('#dev-forms-mm>ul').css('display', 'block');
          $('#dev-forms-mm>>.arrow').addClass('open');
          $('#main-menus-sm').addClass('active');
      });
  </script>
  <!-- Datatables -->
{{--  <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>--}}
  <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}" type="text/javascript"></script>
  {!! $dataTable->scripts() !!}
@endpush
