@extends('layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="p">Operator</p>
              <p class="p">Fakultas Sains dan Matematika</p>
          </div>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      @foreach($operators as $operator)
                        @if ($operator->id == auth()->user()->id)
                          <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <p type="text" class="form-control border-0" id="nama" name="nama">{{ $operator->nama }}</p>
                          </div>
                          <div class="mb-3">
                              <label for="nip" class="form-label">NIP</label>
                              <p type="nip" class="form-control border-0" id="nip" name="nip">{{ $operator->nip }}</p>
                          </div>
                          <div class="mb-3">
                              <label for="no_hp" class="form-label">No. Telepon</label>
                              <p type="no_hp" class="form-control border-0" id="no_hp" name="no_hp">{{ $operator->no_hp }}</p>
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <p type="email" class="form-control border-0" id="email" name="email">{{ $operator->email }}</p>
                          </div>
                          <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <p type="alamat" class="form-control border-0" id="alamat" name="alamat">{{ $operator->alamat }}</p>
                          </div>
                        @endif
                      @endforeach
                      <a href="/edit-profil" class="btn btn-primary">Edit</a>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    