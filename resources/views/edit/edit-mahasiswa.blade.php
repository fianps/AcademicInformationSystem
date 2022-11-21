@extends('layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Data Mahasiswa</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">home</a></li>
            <li class="breadcrumb-item active">Data Mahasiswa</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {{-- <div class="tab-content">
          <div class="tab-pane fade"> --}}
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Edit Data</h5>
                <div class="row">
                  <div class="col-md-10 col-lg-6">
                    <form action="/edit-mahasiswa/{{$mahasiswa->id}}" method="post">
                      @method('put')
                      @csrf
                      <div class="form-group">
                        <label>Name</label>
                        <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" />
                      </div>
                      <div class="form-group">
                        <label>NIM</label>
                        <input disabled type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" />
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input disabled type="text" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}" />
                      </div>
                      <div class="form-group">
                        <label>Angkatan</label>
                        <input disabled type="text" class="form-control" id="angkatan" name="angkatan" value="{{ $mahasiswa->angkatan }}" />
                      </div>
                      <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="{{ $mahasiswa->no_hp }}" />
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="{{ $mahasiswa->alamat }}" />
                      </div>
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          {{-- </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
@endsection