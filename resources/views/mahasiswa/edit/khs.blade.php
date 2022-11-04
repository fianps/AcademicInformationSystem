@extends('mahasiswa/layouts/main')

@section('container')
<div class="page-wrapper">
    <div class="content container-fluid">
      <div class="page-header mt-5">
        <div class="row">
          <div class="col">
            <h3 class="page-title">KHS</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/mahasiswa">home</a></li>
              <li class="breadcrumb-item active">KHS</li>
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
                  <h5 class="card-title">Edit KHS</h5>
                  <div class="row">
                    <div class="col-md-10 col-lg-6">
                      <form action="/edit-khs/{{$khs->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                          <label class="form-label">Active Semester</label>
                          <select class="select form-select" name="semester">
                            <option selected>{{$khs->semester}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>SKS Semester</label>
                          <input type="text" class="form-control" id="sks_smt" name="sks_smt" value="{{ $khs->sks_smt }}" />
                        </div>
                        <div class="form-group">
                          <label>SKS Kumulatif</label>
                          <input type="text" class="form-control" id="sks_total" name="sks_total" value="{{ $khs->sks_total }}" />
                        </div>
                        <div class="form-group">
                          <label>IP Semester</label>
                          <input type="text" class="form-control" id="ips" name="ips" value="{{ $khs->ips }}" />
                        </div>
                        <div class="form-group">
                          <label>IP Kumulatif</label>
                          <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $khs->ipk }}" />
                        </div>
                        <div class="form-group">
                          <label>Scan KHS</label>
                          <input type="file" class="form-control" id="file_khs" name="file_khs" >
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
        

    
    
    