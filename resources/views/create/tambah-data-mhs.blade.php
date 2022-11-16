@extends('layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Data Mahasiswa</h3>
          {{--make button for popup form--}}
          <button type="button" class="btn btn-primary float-right veiwbutton" data-toggle="modal" data-target="#exampleModal">
            Import Data
          </button>
          {{--make popup form for import data--}}
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog">
              <div class="modal-content clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
                </button>
                <form action="/import-data-mhs" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                    <h5 class="title" id="exampleModalLabel">Import Data</h5>
                    <div class="form-group">
                      <input type="file" name="file" class="form-control" id="file" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Import</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
                <h5 class="card-title">Add Data Mahasiswa</h5>
                <div class="row">
                  <div class="col-md-10 col-lg-6">
                    <form action="/tambah-data-mhs" method="post">
                      @method('put')
                      @csrf
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="nama" name="nama"/>
                      </div>
                      <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" />
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" />
                      </div>
                      <div class="form-group">
                        <label>Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" />
                      </div>
                      <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" />
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" />
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        {{--select input Belum Disetujui or Disetujui--}}
                        <select class="form-control" id="status" name="status">
                          <option value="Belum Disetujui">Belum Disetujui</option>
                          <option value="Disetujui">Disetujui</option>
                        </select>
                        {{-- <input type="text" class="form-control" id="alamat" name="alamat" /> --}}
                      </div>
                      <button class="btn btn-primary" type="submit">Done</button>
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
{{--make script to show import--}}
<script>
  function import() {
    document.getElementById('import').style.display = 'block';
  }
</script>
@endsection
        

    
    
    