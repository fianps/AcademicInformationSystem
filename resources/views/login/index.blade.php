@extends('layouts.plain')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <small class="d-block text-center mt-3 ">Don't have an account? Logup <a href="/register">here</a></small>              </small>
              <p class="mt-3 mb-3 text-muted text-center">&copy; 2017–2022</p>
            </form>
          </main>
    </div>
</div>
@endsection