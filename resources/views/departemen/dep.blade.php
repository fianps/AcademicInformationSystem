@extends('departemen/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <div class="text-start">
            <h3 class="h3">{{ auth()->user()->name }}</h3>
            <p class="m-0">Departemen</p>
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
                            <td>
                                <div class="row">
                                    <p class="p mb-0">{{$mahasiswa->nama}}</p>
                                    <p class="form-text">{{$mahasiswa->no_hp}}</p>
                                </div>
                            </td>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->angkatan}}</td>
                            <td>{{$mahasiswa->alamat}}</td>
                            <td>
                                {{--create button edit--}}
                                <a href="/departemen/{{$mahasiswa->id}}" class="btn btn-primary">Detail</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>   
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection