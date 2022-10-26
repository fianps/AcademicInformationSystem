@extends('dosen/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <div class="text-start">
            <h3 class="h3">{{ auth()->user()->name }}</h3>
            <p class="m-0">Dosen</p>
        </div>
      </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      <div class="row">
                        {{--create header--}}
                        <div class="col-md-6">
                          <h4>Verifikasi Berkas Mahasiswa</h4>
                        </div>
                        {{--create table mahasiswa--}}
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($mahasiswas as $mahasiswa)
                              <tr>
                                <th scope="row">{{$mahasiswa->id}}</th>
                                <td>{{$mahasiswa->nama}}</td>
                                <td>{{$mahasiswa->nim}}</td>
                                <td>{{$mahasiswa->status}}</td>
                                <td>
                                    {{--create button detail--}}
                                    <a href="/dosen/{{$mahasiswa->id}}" class="btn btn-primary">Detail</a>
                                    {{--create button changeStatus--}}
                                    @if ($mahasiswa->status === 'Belum Disetujui')
                                        <form action="/dosen/{{$mahasiswa->id}}" method="POST" class="d-inline">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-success">Setujui</button>
                                        </form>
                                    @else
                                        <form action="/dosen/{{$mahasiswa->id}}" method="POST" class="d-inline">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Batalkan</button>
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
    </main>
@endsection
        

    
    
    