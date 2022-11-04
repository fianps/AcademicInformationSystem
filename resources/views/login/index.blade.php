@extends('layouts.plain')

@section('container')
<div class="login-right-wrap">
  <h1>Login</h1>
  <p class="account-subtitle">Access to our dashboard</p>
  <form action="/login" method="POST">
    @csrf
    <div class="form-group">
      <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control" type="text" placeholder="Email"> </div>
    <div class="form-group">
      <input type="password" name="password" id="password" class="form-control" type="text" placeholder="Password"> </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
  </form>
  <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
  <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
  <div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
  <div class="text-center dont-have">Don’t have an account? <a href="/register">Register</a></div>
</div>
@endsection