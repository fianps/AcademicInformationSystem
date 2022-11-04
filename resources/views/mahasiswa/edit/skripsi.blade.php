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
        {{-- <div class="tab-content">
          <div class="tab-pane fade"> --}}
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Edit Skripsi</h5>
                <div class="row">
                  <div class="col-md-10 col-lg-6">
                    <form action="/edit-skripsi/{{$skripsi->id}}" method="post" enctype="multipart/form-data">
                      @method('put')
                      @csrf
                      <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                          <option selected>{{$skripsi->status}}</option>
                          <option value="Lulus">Lulus</option>
                          <option value="Proses">Proses</option>
                          <option value="Belum Ambil">Belum Ambil</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nilai" class="form-label">Nilai</label>
                        <select class="form-select" aria-label="Default select example" name="nilai">
                          <option selected>{{$skripsi->nilai}}</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="lama_studi" class="form-label">Lama Studi</label>
                          <select class="form-select" aria-label="Default select example" name="lama_studi">
                            <option selected>{{$skripsi->lama_studi}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Scan skripsi</label>
                        <input type="file" class="form-control" id="file_skripsi" name="file_skripsi" >
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
        

    
    
    