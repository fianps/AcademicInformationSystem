{{-- @extends('layouts.plain')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control " id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="nip" class="form-control " id="nip" placeholder="nip" required value="{{ old('nip') }}">
                <label for="nip">NIP</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control " id="email" placeholder="email" required value="{{ old('email') }}">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control " id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
              <small class="d-block text-center mt-3 ">Already have an account? Login <a href="/login">here</a></small>
              <p class="mt-3 mb-3 text-muted text-center">&copy; 2017–2022</p>
            </form>
          </main>
    </div>
</div>
@endsection --}}

@extends('layouts.auth')

@section('container-auth')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <form>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control p_input">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook col mr-2">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="#"> Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
