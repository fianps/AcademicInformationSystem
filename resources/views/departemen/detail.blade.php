@extends('dosen/layouts/main')

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
              <div class="card mb-4">
                  <div class="card-body">
                    {{--create header--}}
                    <div class="row">
                      <div class="row-md-6">
                        <h4>Detail Mahasiswa</h4>
                      </div>
                      <hr>
                      <div class="col-md-6">
                        <h5>Data Diri</h5>
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <p type="text" class="form-control border-0" id="nama" name="nama">{{ $mahasiswa->nama }}</p>
                        </div>
                        <div class="mb-3">
                          <label for="nim" class="form-label">NIM</label>
                          <p type="nim" class="form-control border-0" id="nim" name="nim">{{ $mahasiswa->nim }}</p>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <p type="email" class="form-control border-0" id="email" name="email">{{ $mahasiswa->email }}</p>
                        </div>
                        <div class="mb-3">
                          <label for="angkatan" class="form-label">Angkatan</label>
                          <p type="angkatan" class="form-control border-0" id="angkatan" name="angkatan">{{ $mahasiswa->angkatan }}</p>
                        </div>
                        <div class="mb-3">
                          <label for="no_hp" class="form-label">No. Telepon</label>
                          @if ($mahasiswa->no_hp != null)
                            <p type="no_hp" class="form-control border-0" id="no_hp" name="no_hp">{{ $mahasiswa->no_hp }}</p>
                          @else
                            <p type="no_hp" class="form-control border-0" id="no_hp" name="no_hp">-</p>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5>Informasi Akademik</h5>
                        <div class="mb-3">
                          <label for="semester" class="form-label">Semester : 
                            @if ($irs->semester != null)
                                {{$irs->semester}}</label>
                            @else
                                -</label>
                            @endif
                        </div>
                        <div class="mb-3">
                          <label for="ipk" class="form-label">IP Kumulatif : 
                            @if ($khs->ipk != null)
                                {{$khs->ipk}}</label>
                            @else
                                -</label>
                            @endif
                        </div>
                        <div class="mb-3">
                          <label for="sks" class="form-label">SKS Kumulatif : 
                            @if ($khs->sks_total != null)
                                {{$khs->sks_total}}</label>
                            @else
                                -</label>
                            @endif
                        </div>
                        <h5 class="mt-2 mb-3">Berkas</h5>
                        @if ($irs->file_irs != null)
                            <div class="mb-3">
                              <label for="irs" class="form-label">IRS : <a href="{{ asset('storage/irs/'.$irs->file_irs) }}" style="text-decoration: none" target="_blank">Lihat</a></label>
                            </div>
                        @endif
                        @if ($khs->file_khs != null)
                            <div class="mb-3">
                              <label for="khs" class="form-label">KHS : <a href="{{ asset('storage/khs/'.$khs->file_khs) }}" style="text-decoration: none" target="_blank">Lihat</a></label>
                            </div>
                        @endif
                        @if ($pkl->file_pkl != null)
                          <div class="mb-3">
                            <label for="pkl" class="form-label">Berita Acara PKL : <a href="{{ asset('storage/pkl/'.$pkl->file_pkl) }}" style="text-decoration: none" target="_blank">Lihat</a></label>
                          </div>
                        @endif
                        @if ($skripsi->file_skripsi != null)
                          <div class="mb-3">
                            <label for="skripsi" class="form-label">Berita Acara Skripsi : <a href="{{ asset('storage/skripsi/'.$skripsi->file_skripsi) }}" style="text-decoration: none" target="_blank">Lihat</a></label>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection