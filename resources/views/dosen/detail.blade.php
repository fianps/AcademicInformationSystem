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
              <li class="breadcrumb-item"><a href="/">home</a></li>
              <li class="breadcrumb-item active">Verification</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-3">
              <span>Personal Details</span>
            </h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <p class="col-sm-9">{{$mahasiswa->nama}}</p>
                </div>
                <div class="form-group">
                  <label>NIM</label>
                  <p class="col-sm-9">{{$mahasiswa->nim}}</p>
                </div>
                <div class="form-group">
                  <label>Year</label>
                  <p class="col-sm-9">{{$mahasiswa->angkatan}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <p class="col-sm-9">{{$mahasiswa->email}}</p>
                </div>
                <div class="form-group">
                  <label>Telephone</label>
                  <p class="col-sm-9">{{$mahasiswa->no_hp}}</p>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <p class="col-sm-9">{{$mahasiswa->alamat}}</p>
                </div>
              </div>
            </div>
            <h4 class="card-title mb-3">Academic Information</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Semester : 
                    @if ($irs->semester != null)
                      {{$irs->semester}}</label>
                    @else
                      -</label>
                    @endif
                </div>
                <div class="form-group">
                  <label>IP Semester : 
                    @if ($khs->ips != null)
                      {{$khs->ips}}</label>
                    @else
                      -</label>
                    @endif
                </div>
                <div class="form-group">
                  <label>IP Kumulatif : 
                    @if ($khs->ipk != null)
                      {{$khs->ipk}}</label>
                    @else
                      -</label>
                    @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>SKS Semester : 
                    @if ($khs->sks_smt != null)
                      {{$khs->sks_smt}}</label>
                    @else
                      -</label>
                    @endif
                </div>
                <div class="form-group">
                  <label>SKS Kumulatif : 
                    @if ($khs->sks_total != null)
                      {{$khs->sks_total}}</label>
                    @else
                      -</label>
                    @endif
                </div>
              </div>
            </div>
            <h4 class="card-title mb-3">File</h4>
            <div class="row">
              <div class="col-md-6">
                @if ($irs->file_irs != null)
                  <div class="form-group">
                    <label>IRS : 
                      <a href="{{ asset('storage/irs/'.$irs->file_irs) }}" style="text-decoration: none" target="_blank">Check</a>
                    </label>
                  </div>
                @endif
                @if ($khs->file_khs != null)
                  <div class="form-group">
                    <label>KHS : 
                      <a href="{{ asset('storage/khs/'.$khs->file_khs) }}" style="text-decoration: none" target="_blank">Check</a>
                    </label>
                  </div>
                @endif
              </div>
              <div class="col-md-6">
                @if ($pkl->file_pkl != null)
                  <div class="form-group">
                    <label>Berita Acara PKL : 
                      <a href="{{ asset('storage/pkl/'.$pkl->file_pkl) }}" style="text-decoration: none" target="_blank">Check</a>
                    </label>
                  </div>
                @endif
                @if ($skripsi->file_skripsi != null)
                  <div class="form-group">
                    <label>Berita Acara Skripsi : 
                      <a href="{{ asset('storage/skripsi/'.$skripsi->file_skripsi) }}" style="text-decoration: none" target="_blank">Check</a>
                    </label>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection