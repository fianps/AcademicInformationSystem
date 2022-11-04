@extends('dosen/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data PKL</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dosen">home</a></li>
              <li class="breadcrumb-item active">Data PKL</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'sudah') ? 'active' : '' }}" href="/data-pkl?id=sudah" >Lulus</a></li>
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'proses') ? 'active' : '' }}" href="/data-pkl?id=proses" >Proses</a></li>
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'belum') ? 'active' : '' }}" href="/data-pkl?id=belum" >Belum</a></li>
            </ul>
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">NIM</th>
                    <th>Year</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @if (request('id') == 'sudah')
                    @foreach ($mahasiswa as $mhs)
                      @foreach ($pkl as $data)
                        @if ($mhs->email == $data->email && $data->status == 'Lulus')
                          <tr>
                            <td>
                              <h2 class="table-avatar">
                                <a href="/dosen/{{$mhs->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                                <a href="/dosen/{{$mhs->id}}">{{$mhs->nama}} <span>{{$mhs->no_hp}}</span></a>
                              </h2>    
                            </td>
                            <td class="text-center">{{ $mhs->nim }}</td>
                            <td>{{ $mhs->angkatan }}</td>
                            <td class="text-center">{{ $data->status }}</td>
                          </tr>
                        @endif
                      @endforeach
                    @endforeach
                  @elseif (request('id') == 'belum')
                    @foreach ($mahasiswa as $mhs)
                      @foreach ($pkl as $data)
                        @if ($mhs->email == $data->email && $data->status == 'Belum')
                          <tr>
                            <td>
                              <h2 class="table-avatar">
                                <a href="/dosen/{{$mhs->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                                <a href="/dosen/{{$mhs->id}}">{{$mhs->nama}} <span>{{$mhs->no_hp}}</span></a>
                              </h2>    
                            </td>
                            <td class="text-center">{{ $mhs->nim }}</td>
                            <td>{{ $mhs->angkatan }}</td>
                            <td class="text-center">{{ $data->status }}</td>
                          </tr>
                        @endif
                      @endforeach
                    @endforeach
                  @elseif (request('id') == 'proses')
                    @foreach ($mahasiswa as $mhs)
                      @foreach ($pkl as $data)
                        @if ($mhs->email == $data->email && $data->status == 'Proses')
                          <tr>
                            <td>
                              <h2 class="table-avatar">
                                <a href="/dosen/{{$mhs->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                                <a href="/dosen/{{$mhs->id}}">{{$mhs->nama}} <span>{{$mhs->no_hp}}</span></a>
                              </h2>    
                            </td>
                            <td class="text-center">{{ $mhs->nim }}</td>
                            <td>{{ $mhs->angkatan }}</td>
                            <td class="text-center">{{ $data->status }}</td>
                          </tr>
                        @endif
                      @endforeach
                    @endforeach
                  @else
                    @foreach ($mahasiswa as $mhs)
                      @foreach ($pkl as $data)
                        @if ($mhs->email == $data->email)
                          <tr>
                            <td>
                              <h2 class="table-avatar">
                                <a href="/dosen/{{$mhs->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image"></a>
                                <a href="/dosen/{{$mhs->id}}">{{$mhs->nama}} <span>{{$mhs->no_hp}}</span></a>
                              </h2>    
                            </td>
                            <td class="text-center">{{ $mhs->nim }}</td>
                            <td>{{ $mhs->angkatan }}</td>
                            <td class="text-center">{{ $data->status }}</td>
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
  </div>
</div>
@endsection
        

    
    
    