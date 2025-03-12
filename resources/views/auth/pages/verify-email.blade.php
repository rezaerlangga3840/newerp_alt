@extends('auth.master.main')
@section('pagetitle')
AdminDBM | Verify Email
@endsection
@section('pagecontent')
<div class="register-box">
  <div class="register-logo">
    <a href="{{route('home')}}"><b>Admin</b>DBM</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
    <form action="{{ route('verification.send') }}" method="POST">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Resend</button>
    </form>
    <form action="{{ route('logout') }}" method="POST">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Logout</button>
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