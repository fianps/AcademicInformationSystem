@extends('layouts.plain')

@section('container')
<div class="login-right-wrap">
  <h1 class="mb-3">Register</h1>
  <form action="/register" method="POST">
    @csrf
    <div class="form-group">
      <input type="text" name="name" class="form-control " id="name" placeholder="name" required value="{{ old('name') }}"> </div>
    <div class="form-group">
      <input type="email" name="email" class="form-control " id="email" placeholder="example@email.com" required value="{{ old('email') }}"> </div>
    <div class="form-group">
      {{--select input for role admin, mahasiswa, departemen, dosen--}}
      <select class="form-control" onchange="kode()" name="role" id="role">
        <option value="admin">Admin</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="departemen">Departemen</option>
        <option value="dosen">Dosen</option>
      </select> </div>
      {{-- <input class="form-control" type="text" placeholder="Confirm Password"> </div> --}}
    <div class="form-group" id="kode_wali" style="display: none;">
      <input type="text" name="kode_wali" class="form-control " id="kode_wali" placeholder="kode_wali" value="{{ old('kode_wali') }}"> </div>
    <div class="form-group">
      <input type="password" class="form-control " id="password" name="password" placeholder="Password" required> </div>
    <div class="form-group mb-0">
      <button class="btn btn-primary btn-block" type="submit">Register</button>
    </div>
  </form>
  <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
  <div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
  <div class="text-center dont-have">Already have an account? <a href="/login">Login</a> </div>
</div>
<script>
  function kode(){
    var role = document.getElementById("role").value;
    if(role != "mahasiswa" && role != "dosen"){
      document.getElementById("kode_wali").style.display = "none";
    }else{
      document.getElementById("kode_wali").style.display = "block";
    }
  }
</script>
@endsection