@extends('layouts.plain')

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
                <input type="text" name="role" class="form-control " id="role" placeholder="role" required value="{{ old('role') }}">
                <label for="role">Role</label>
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
@endsection