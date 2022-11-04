@extends('mahasiswa/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">IRS</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mahasiswa">home</a></li>
            <li class="breadcrumb-item active">IRS</li>
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
                <h5 class="card-title">Edit IRS</h5>
                <div class="row">
                  <div class="col-md-10 col-lg-6">
                    <form action="/edit-irs/{{$irs->id}}" method="post" enctype="multipart/form-data">
                      @method('put')
                      @csrf
                      <div class="form-group">
                        <label class="form-label">Active Semester</label>
                        <select class="select form-select" name="semester">
                          <option selected>{{$irs->semester}}</option>
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
                        <label>SKS</label>
                        <input type="text" class="form-control" id="sks" name="sks" value="{{ $irs->sks }}" />
                      </div>
                      <div class="form-group">
                        <label>Scan IRS</label>
                        <input type="file" class="form-control" id="file_irs" name="file_irs" >
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
        

    
    
    