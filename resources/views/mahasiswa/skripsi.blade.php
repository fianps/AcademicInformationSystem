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
              <div class="card mb-4">
                  <div class="card-body">
                      <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <p type="text" class="form-control border-0" id="status" name="status">{{ $skripsi->status }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="nilai" class="form-label">Nilai</label>
                          @if ($skripsi->nilai == null)
                              <p type="text" class="form-control border-0" id="nilai" name="nilai">-</p>
                            @else
                              <p type="text" class="form-control border-0" id="nilai" name="nilai">{{ $skripsi->nilai }}</p>
                            @endif
                      </div>
                      <div class="mb-3">
                          <label for="lama_studi" class="form-label">Lama Studi</label>
                          @if ($skripsi->lama_studi == null)
                              <p type="text" class="form-control border-0" id="lama_studi" name="lama_studi">-</p>
                            @else
                              <p type="text" class="form-control border-0" id="lama_studi" name="lama_studi">{{ $skripsi->lama_studi }}</p>
                            @endif
                      </div>
                      <div class="mb-3">
                          <label for="tgl_sidang" class="form-label">Tanggal Sidang</label>
                          @if ($skripsi->tgl_sidang == null)
                              <p type="text" class="form-control border-0" id="tgl_sidang" name="tgl_sidang">-</p>
                            @else
                              <p type="text" class="form-control border-0" id="tgl_sidang" name="tgl_sidang">{{ $skripsi->tgl_sidang }}</p>
                            @endif
                      </div>
                      <div class="mb-3">
                          <label for="file_skripsi" class="form-label">Berita Acara</label>
                          @if ($skripsi->file_skripsi == null)
                              <p type="text" class="form-control border-0" id="file_skripsi" name="file_skripsi">-</p>
                          @else
                          <a href="storage/skripsi/{{$skripsi->file_skripsi}}" target="_blank" style="text-decoration: none" class="form-control border-0 text-primary">Cek Berita Acara</a>
                          @endif
                      </div>
                      <a href="/edit-skripsi/{{ $skripsi->id }}" class="btn btn-primary">Change</a>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection