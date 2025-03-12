@extends('auth.master.main')
@section('pagetitle')
AdminDBM | Forgot Password
@endsection
@section('pagecontent')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('home')}}"><b>Admin</b>DBM</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        <form method="POST" action="{{route('password.email')}}">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Email Password Reset Link</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
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