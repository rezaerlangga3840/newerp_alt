@extends('auth.master.main')
@section('pagetitle')
AdminDBM | Security Alert
@endsection
@section('pagecontent')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('home')}}"><b>Admin</b>DBM</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">This is a secure area of the application. Please confirm your password before continuing.</p>
        <form method="POST" action="{{route('password.confirm')}}">
            @csrf
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
@endsection
@section('customscripts')
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection