@extends('layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <div class="text-start">
            <h3 class="h3">{{ auth()->user()->name }}</h3>
            <p class="m-0">Operator</p>
        </div>
      </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      {{--make form to edit--}}
                      <form action="/edit-profil/{{$operator->id}}" method="post">
                          @method('put')
                          @csrf
                          <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $operator->nama }}">
                          </div>
                          <div class="mb-3">
                              <label for="nip" class="form-label">NIP</label>
                              <input disabled type="text" class="form-control" id="nip" name="nip" value="{{ $operator->nip }}">
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input disabled type="text" class="form-control" id="email" name="email" value="{{ $operator->email }}">
                          </div>
                          <div class="mb-3">
                              <label for="no_hp" class="form-label">No. Telepon</label>
                              <input type="text" class="form-control" id="no_hp" name="no_hp" >
                          </div>
                          <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" id="alamat" name="alamat" >
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    