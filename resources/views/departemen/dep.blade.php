@extends('departemen/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data Mahasiswa</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/departemen-dashboard">home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">NIM</th>
                    <th>Year</th>
                    <th>Address</th>
                    <th class="text-center">Lecture Code</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($mahasiswas as $mahasiswa)
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="/departemen/{{$mahasiswa->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                          <a href="/departemen/{{$mahasiswa->id}}">{{$mahasiswa->nama}} <span>{{$mahasiswa->no_hp}}</span></a>
                        </h2>
                      </td>
                      <td class="text-center">{{$mahasiswa->nim}}</td>
                      <td>{{$mahasiswa->angkatan}}</td>
                      <td>{{$mahasiswa->alamat}}</td>
                      <td class="text-center">{{$mahasiswa->kode_wali}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection