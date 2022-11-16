@extends('layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data Mahasiswa</h3>
            <a href="/tambah-data-mhs" class="btn btn-primary float-right veiwbutton">Add Data</a>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home</a></li>
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
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Year</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($mahasiswas as $mahasiswa)
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="/edit-mahasiswa/{{$mahasiswa->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                          <a href="/edit-mahasiswa/{{$mahasiswa->id}}">{{$mahasiswa->nama}} <span>{{$mahasiswa->no_hp}}</span></a>
                        </h2>
                      </td>
                      <td>{{$mahasiswa->nim}}</td>
                      <td>{{$mahasiswa->angkatan}}</td>
                      <td>{{$mahasiswa->alamat}}</td>
                      <td class="text-right">
                        <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                          <div class="dropdown-menu dropdown-menu-right"> 
                            <a class="dropdown-item text-center" href="/edit-mahasiswa/{{$mahasiswa->id}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                            <form action="/data-mahasiswa/{{$mahasiswa->id}}" method="post" class="dropdown-item">
                              @method('delete')
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt m-r-5"></i> Delete</button>
                            </form>
                          </div>
                        </div>
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
  </div>
</div>
@endsection
        

