<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
  <base href="">
  <meta charset="utf-8"/>
  <title>{{ config('app.name') }} | @yield('page_tagline')</title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
{{--  <link href="{{asset('library/css/fonts-googleapis.css')}}" rel="stylesheet" type="text/css"/>--}}
  <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('library/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css"/>
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- CSS FOR DATERANGE -->
  <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css"/>
  <!-- ENDS -->
  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css"/>
  <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <link href="{{asset('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
  <link href="{{asset('assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>

  <link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="{{asset('library/css/jquery-confirm.min.css')}}">
  <link rel="stylesheet" href="{{asset('library/css/chosen.css')}}">
  <link rel="stylesheet" href="{{asset('library/css/wave.css')}}">
  <style type="text/css" media="screen">
    .page-content {
      background: #eee;
    }

    .pt-5 {
      padding-top: 5px;
    }

    .pb-5 {
      padding-bottom: 5px;
    }

    .p-0 {
      padding: 0px;
    }

    .m-0 {
      margin: 0px;
    }

    .portlet-body {
      background: white
    }

    .title {
      color: white;
    }

    table td {
      vertical-align: middle !important;
    }

    .blackbg {
      z-index: 3;
      background-color: #666;
      filter: alpha(opacity=30);
      opacity: 0.3;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: fixed;
    }

    .loader {
      color: white;
      top: 35%;
      left: 50%;
      margin-left: 0px;
      position: fixed;
      padding: 3px;
      width: 130px;
      height: 106px;
      background: url("{{url('public')}}/loader.gif") no-repeat center;
      z-index: 4;
    }
  </style>

  <!--end::Layout Skins -->
  <link rel="shortcut icon" href="{{asset('uploads/project-info/') . '/' . project()->app_icon}}"/>

@stack('css')

<!-- Custom Theme Style -->
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- begin:: Page -->
<div class="page-wrapper">
  <!-- BEGIN HEADER -->
  <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
      <!-- BEGIN LOGO -->
      <div class="page-logo">
        <a href="{{url('/')}}">
          <img src="{{asset('uploads/project-info')}}/{{project()->brand_logo}}" alt="logo" style="margin: 7px 0 0;height: 30px;width: 165px" class="logo-default"/>
        </a>
        <div class="menu-toggler sidebar-toggler">
          <span></span>
        </div>
      </div>
      <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span></span>
      </a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">

        <div class="topbuttons">

        </div>
        <ul class="nav navbar-nav pull-right">
          <!-- BEGIN NOTIFICATION DROPDOWN -->

          <li class="dropdown dropdown-user">
            <span id="id" style="display: none;">{{Auth::user()->id}}</span>
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" id="user_img_name">
              <img class="img-circle" src="{{ asset('uploads/profile-image') . '/' . Auth::user()->profile_image }}">
              <span class="username username-hide-on-mobile">{{ Auth::user()->name }}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li>
                <a href="{{ route('update-password') }}"> <i class="fa fa-pencil"></i> Change Password</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="icon-key"></i> Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
  </div>
  <!-- END HEADER -->
  <!-- BEGIN HEADER & CONTENT DIVIDER -->
  <div class="clearfix"></div>
  <!-- END HEADER & CONTENT DIVIDER -->

  <!-- BEGIN CONTAINER -->
  <div class="page-container">

    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
      <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
          <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
              <span></span>
            </div>
          </li>

          {!! indent(generate_multilevel_menus()) !!}
          @if(super_user())
            @include('Admin.layouts.inc.superUserMenus')
          @endif
          @if(super_user() && developer_mode())
            @include('Admin.layouts.inc.devMenus')
          @endif
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->

    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" style="height: auto">

        @yield('content')

      </div>
      <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
  <div class="page-footer">
    <div class="page-footer-inner"> Developed by
      <a target="_blank" href="https://roopokar.com">Roopokar</a>

    </div>
    <div class="scroll-to-top">
      <i class="icon-arrow-up"></i>
    </div>
  </div>
  <!-- END FOOTER -->
</div>
<!-- end:: Page -->

<!-- BEGIN QUICK NAV -->

<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->

<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('library/js/jquery-confirm.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jstree/dist/jstree.min.js')}}" type="text/javascript"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js')}}"></script>--}}
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>

<!-- for DateRange Picker SCRIPTS -->
<script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
<!-- ends -->

<script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/pages/scripts/table-datatables-buttons.js')}}" type="text/javascript"></script>
<script src="{{asset('library/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('library/js/chosen.jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('js/all.js')}}" type="text/javascript"></script>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>

<!-- END THEME LAYOUT SCRIPTS -->

<!--begin::Page Scripts(used by this page) -->
@stack('scripts')

<!--end::Page Scripts -->

</body>

</html>
