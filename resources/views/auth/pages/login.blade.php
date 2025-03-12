@extends('auth.master.main')
@section('pagetitle')
AdminDBM | Login
@endsection
@section('pagecontent')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('home')}}"><b>Admin</b>DBM</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input id="remember_me" type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="#">I forgot my password</a><br>
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