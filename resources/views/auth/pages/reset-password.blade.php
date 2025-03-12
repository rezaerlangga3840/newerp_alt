@extends('auth.master.main')
@section('pagetitle')
AdminDBM | Reset Password
@endsection
@section('pagecontent')
<div class="register-box">
  <div class="register-logo">
    <a href="{{route('home')}}"><b>Admin</b>DBM</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Reset Password</p>
    <form action="{{ route('password.store') }}" method="post">
      @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">
      <div class="form-group has-feedback">
        <input id="name" type="text" name="name" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="email" type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
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