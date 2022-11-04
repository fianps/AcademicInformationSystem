@extends('dosen/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Verification</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dosen">home</a></li>
              <li class="breadcrumb-item active">Verification</li>
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
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($mahasiswas as $mahasiswa)
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="/dosen/{{$mahasiswa->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                          <a href="/dosen/{{$mahasiswa->id}}">{{$mahasiswa->nama}} <span>{{$mahasiswa->no_hp}}</span></a>
                        </h2>
                      </td>
                      <td class="text-center">{{$mahasiswa->nim}}</td>
                      <td>{{$mahasiswa->angkatan}}</td>
                      <td>{{$mahasiswa->alamat}}</td>
                      <td class="text-center">
                        @if ($mahasiswa->status === 'Belum Disetujui')
                          <form action="/dosen/{{$mahasiswa->id}}" method="POST" class="text-center">
                            @method('put')
                            @csrf
                            <button type="submit" style="border: none" class="badge badge-pill bg-danger inv-badge">Decline</button>
                          </form>
                        @else
                          <form action="/dosen/{{$mahasiswa->id}}" method="POST" class="text-center">
                            @method('put')
                            @csrf
                            <button type="submit" style="border: none" class="badge badge-pill bg-success inv-badge">Approved</button>
                          </form>
                        @endif
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
        

    
    
    