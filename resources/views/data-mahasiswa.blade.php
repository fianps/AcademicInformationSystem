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
                    {{--create header--}}
                    <div class="row">
                      <div class="col-md-6">
                        <h4>Data Mahasiswa</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="float-end">
                          <a href="/tambah-data-mhs" class="btn btn-primary">Tambah Data</a>
                        </div>
                      </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($mahasiswas as $mahasiswa)
                          <tr>
                            <th scope="row">{{$mahasiswa->id}}</th>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->angkatan}}</td>
                            <td>{{$mahasiswa->alamat}}</td>
                            <td>
                                {{--create button edit--}}
                                <a href="/edit-mahasiswa/{{$mahasiswa->id}}" class="btn btn-primary">Edit</a>
                                {{--create button delete--}}
                                <form action="/data-mahasiswa/{{$mahasiswa->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>   
                    
                    >
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    