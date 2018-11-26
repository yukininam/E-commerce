<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/backend_css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/backend_css/skins/skin-blue.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/blue.css') }}">



</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

 @if(Session::has('flash_message_error')) 
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   

        @if(Session::has('flash_message_success')) 
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif    

    <form action="{{ url('admin') }}" method="post"  role="form">{{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
    
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



  </div>

</div>

<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>

<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend_js/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
