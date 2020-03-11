<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
  <base href="">
  <meta charset="utf-8"/>
  <title>{{ config('app.name') }} | Login</title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--begin::Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

  <!--end::Fonts -->

  <!--begin::Global Theme Styles(used by all pages) -->
  <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('assets/pages/css/login-5.min.css')}}" rel="stylesheet" type="text/css" />

  <!--end::Global Theme Styles -->

  <!--begin::Layout Skins(used by all pages) -->
{{--  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>--}}

  <!--end::Layout Skins -->
  <link rel="shortcut icon" href="{{asset('uploads/project-info')}}/{{project()->project_icon}}" />

@stack('css')

<!-- Custom Theme Style -->
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="login">
<div class="user-login-5">
  <div class="row bs-reset">
    <div class="col-md-6 bs-reset mt-login-5-bsfix">
      <div class="login-bg" style="background: #821745; position: relative; z-index: 0;">
        <div style="position:absolute; top:30%; left:2.5em;">
          <img class="login-logo" src="{{ asset('uploads/project-info/'.project()->company_logo) }}">
          <div class="login-content" style="margin-top: 80px;margin-left: 35px">
            <h1 style="color:#fff; font-size:250%;">{{project()->app_name}}, {{project()->company_name}}</h1>
            <p style="color:#fff; font-size:150%; font-weight:200;">{{project()->project_details}}</p>
          </div>
        </div>


        <div class="row" style="vertical-align: middle; height: 500px">

        </div>
        <div class="row " style="position:absolute; bottom:0; padding-bottom:20px; display:block; width:100%;">
          <div class="col-md-12">
            <div class="col-md-3 frontbttomlinks" style="text-align:center;">
              <strong><a href="https://roopokar.com" target="_blank" class="text-warning">Roopokar</a></strong>
            </div>
            <div class="col-md-3 frontbttomlinks" style="text-align:center;" >
              <strong><a href="https://roopokar.com" target="_blank" class="text-warning">Support</a></strong>
            </div>
            <div class="col-md-3 frontbttomlinks" style="text-align:center;">
              <strong><a href="https://roopokar.com" target="_blank" class="text-warning">Modules</a></strong>
            </div>
            <div class="col-md-3 frontbttomlinks" style="text-align:center;">
              <strong><a href="https://roopokar.com" target="_blank" class="text-warning">Billing</a></strong>
            </div>
            <!--<div class="col-md-2 text-left">-->
          <!--    <strong><a href="{{asset('join-us')}}" class="text-warning">Join Us</a></strong>-->
            <!--</div>-->
            <!--<div class="col-md-2 text-left">-->
          <!--    <strong><a href="{{asset('careers')}}" class="text-warning">Careers</a></strong>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
      <div class="login-content">
        <div class="col-md-10 col-md-offset-1">
          <form action="{{ route('login') }}" class="login-form" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="email" required style="border: 1px solid #821745"/> </div>
              <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required style="border: 1px solid #821745"/> </div>
            </div>
            <div class="row">
              <div class="col-sm-8 text-right">
                <button class="btn pull-left" style="background: #821745;color:white" type="submit">Sign In</button>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-12 text-left">
                <h4 style="color:#801842;" class="text-primary">Demo Credential</h4>
                <hr style="margin-top:8px; padding:0px">
                <strong class="text-primary" style="font-size: 14px; color:#000; margin-top:5px;" >
                  ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;erp@roopokar.com
                  <br>
                  Password :&nbsp;&nbsp; &nbsp;erp
                </strong>
                <hr>
                <!--<h4 class="text-success">Department Head/Line Manager</h4>-->
                <!--<hr style="margin:0px;padding:0px">-->
                <!--<strong class="text-success" style="font-size: 12px">-->
                <!--    ID : AD-0001-->
                <!--    <br>-->
                <!--    Password : 0001-->
                <!--</strong>-->
                <!--<hr>-->
                <!--<h4 class="text-info">Employee</h4>-->
                <!--<hr style="margin:0px;padding:0px">-->
                <!--<strong class="text-info" style="font-size: 12px">-->
                <!--    ID : AC-0016-->
                <!--    <br>-->
                <!--    Password : 0016-->
                <!--</strong>-->
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-12 text-left">
                @if(Session::has('error'))
                  <strong style="background: white;color:red;font-size: 12px">{!!Session::get('error')!!}</strong>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="login-footer">
        <div class="row bs-reset">
          <div class="col-xs-5 bs-reset">
            <ul class="login-social">
              <li>
                <a href="https://www.facebook.com/roopokar/" target="_blank">
                  <i class="icon-social-facebook"></i>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="icon-social-twitter"></i>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="icon-social-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-xs-7 bs-reset">
            <div class="login-copyright text-right">
              <p>Copyright &copy; Roopokar 2018-2019</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/pages/scripts/login-5.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!--begin::Page Scripts(used by this page) -->
@stack('scripts')

<!--end::Page Scripts -->
</body>

</html>
