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
                        <div class="md-6">
                          <h4>Data Skripsi Mahasiswa</h4>
                        </div>
                        <hr>
                        <div class="btn-group me-2">
                            <a href="/data-skripsi?id=sudah" class="btn btn-sm btn-outline-secondary {{ (request('id') === 'sudah') ? 'active' : '' }}">Selesai</a>
                            <a href="/data-skripsi?id=proses" class="btn btn-sm btn-outline-secondary {{ (request('id') === 'proses') ? 'active' : '' }}">Proses</a>
                            <a href="/data-skripsi?id=belum" class="btn btn-sm btn-outline-secondary {{ (request('id') === 'belum') ? 'active' : '' }}">Belum</a>
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
                              </tr>
                            </thead>
                            <tbody>
                            {{--get id link to show table--}}
                            @if (request('id') == 'sudah')
                                @foreach ($mahasiswa as $mhs)
                                    @foreach ($skripsi as $data)
                                        @if ($mhs->email == $data->email && $data->status == 'Lulus')
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $mhs->nama }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="/dosen/{{ $mhs->id }}" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            @elseif (request('id') == 'proses')
                                @foreach ($mahasiswa as $mhs)
                                    @foreach ($skripsi as $data)
                                        @if ($mhs->email == $data->email && $data->status == 'Proses')
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $mhs->nama }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="/dosen/{{ $mhs->id }}" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            @elseif (request('id') == 'belum')
                                @foreach ($mahasiswa as $mhs)
                                    @foreach ($skripsi as $data)
                                        @if ($mhs->email == $data->email && $data->status == 'Belum Ambil')
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $mhs->nama }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="/dosen/{{ $mhs->id }}" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            @else
                                @foreach ($mahasiswa as $mhs)
                                    @foreach ($skripsi as $data)
                                        @if ($mhs->email == $data->email)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $mhs->nama }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="/dosen/{{ $mhs->id }}" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection