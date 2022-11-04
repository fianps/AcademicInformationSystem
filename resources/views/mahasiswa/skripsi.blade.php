@extends('mahasiswa/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Skripsi</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mahasiswa">home</a></li>
            <li class="breadcrumb-item active">Skripsi</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content profile-tab-cont">
          <div class="tab-pane fade show active">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-between">
                  <span>Skripsi Details</span>
                  <a class="edit-link" href="/edit-skripsi/{{ $skripsi->id }}"><i class="fa fa-edit mr-1"></i>Edit</a>
                </h5>
                <div class="row mt-5">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Status</p>
                  <p class="col-sm-9">{{$skripsi->status}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Score</p>
                  @if ($skripsi->nilai != null)
                    <p class="col-sm-9">{{$skripsi->nilai}}</p>
                  @else
                    <p class="col-sm-9">-</p>
                  @endif
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Length of Study</p>
                  @if ($skripsi->lama_studi != null)
                    <p class="col-sm-9">{{$skripsi->lama_studi}}</p>
                  @else
                    <p class="col-sm-9">-</p>
                  @endif
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Thesis Trial Date</p>
                  @if ($skripsi->tgl_sidang != null)
                    <p class="col-sm-9">{{$skripsi->tgl_sidang}}</p>
                  @else
                    <p class="col-sm-9">-</p>
                  @endif
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Attachment</p>
                  @if ($skripsi->file_skripsi == null)
                    <a href="storage/skripsi/{{$skripsi->file_skripsi}}" target="_blank" class="col-sm-9">Check here</a>
                  @else
                    <p class="col-sm-9">-</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection