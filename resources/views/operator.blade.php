@extends('layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Profile</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">home</a></li>
            <li class="breadcrumb-item active">Profile</li>
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
                  <span>Personal Details</span>
                  <a class="edit-link" href="/edit-profil/{{ $operator->id }}"><i class="fa fa-edit mr-1"></i>Edit</a>
                </h5>
                <div class="row mt-5">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Name</p>
                  <p class="col-sm-9">{{$operator->nama}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">NIP</p>
                  <p class="col-sm-9">{{$operator->nip}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Email</p>
                  <p class="col-sm-9">{{$operator->email}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Telephone</p>
                  <p class="col-sm-9">{{$operator->no_hp}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Address</p>
                  <p class="col-sm-9">{{$operator->alamat}}</p>
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
    