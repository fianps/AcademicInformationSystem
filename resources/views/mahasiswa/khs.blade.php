@extends('mahasiswa/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="p">Mahasiswa</p>
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
                      <div class="mb-3">
                          <label for="semester" class="form-label">Semester Aktif</label>
                          <p type="text" class="form-control border-0" id="semester" name="semester">{{ $khs->semester }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="sks_smt" class="form-label">SKS Semester</label>
                          <p type="text" class="form-control border-0" id="sks_smt" name="sks_smt">{{ $khs->sks_smt }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="sks_total" class="form-label">SKS Kumulatif</label>
                          <p type="text" class="form-control border-0" id="sks_total" name="sks_total">{{ $khs->sks_total }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="ips" class="form-label">IP Semester</label>
                          <p type="text" class="form-control border-0" id="ips" name="ips">{{ $khs->ips }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="ipk" class="form-label">IP Kumulatif</label>
                          <p type="text" class="form-control border-0" id="ipk" name="ipk">{{ $khs->ipk }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="file_khs" class="form-label">Scan KHS</label>
                          <a href="storage/khs/{{$khs->file_khs}}" target="_blank" style="text-decoration: none" class="form-control border-0 text-primary">Cek File KHS</a>
                      </div>
                      <a href="/edit-khs/{{ $khs->id }}" class="btn btn-primary">Change</a>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    