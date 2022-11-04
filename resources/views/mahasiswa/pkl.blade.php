@extends('mahasiswa/layouts/main')

@section('container')
<div class="page-wrapper">
    <div class="content container-fluid">
      <div class="page-header mt-5">
        <div class="row">
          <div class="col">
            <h3 class="page-title">PKL</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/mahasiswa">home</a></li>
              <li class="breadcrumb-item active">PKL</li>
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
                    <span>PKL Details</span>
                    <a class="edit-link" href="/edit-pkl/{{ $pkl->id }}"><i class="fa fa-edit mr-1"></i>Edit</a>
                  </h5>
                  <div class="row mt-5">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Status</p>
                    <p class="col-sm-9">{{$pkl->status}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Score</p>
                    <p class="col-sm-9">{{$pkl->nilai}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Attachment</p>
                    <a href="storage/pkl/{{$pkl->file_pkl}}" target="_blank" class="col-sm-9">Check here</a>
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
        

    
    
    