@extends('mahasiswa/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <div class="text-start">
            <h3 class="h3">{{ auth()->user()->name }}</h3>
            <p class="m-0">Mahasiswa</p>
        </div>
      </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                    <form action="/edit-khs/{{$khs->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester Aktif</label>                        
                            <select class="form-select" aria-label="Default select example" name="semester">
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
                        <div class="mb-3">
                            <label for="sks_smt" class="form-label">SKS Semester</label>
                            <input type="text" class="form-control" id="sks_smt" name="sks_smt" value="{{ $khs->sks_smt }}">
                        </div>
                        <div class="mb-3">
                            <label for="sks_total" class="form-label">SKS Kumulatif</label>
                            <input type="text" class="form-control" id="sks_total" name="sks_total" value="{{ $khs->sks_total }}">
                        </div>
                        <div class="mb-3">
                            <label for="ips" class="form-label">IP Semester</label>
                            <input type="text" class="form-control" id="ips" name="ips" value="{{ $khs->ips }}">
                        </div>
                        <div class="mb-3">
                            <label for="ipk" class="form-label">IP Kumulatif</label>
                            <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $khs->ipk }}">
                        </div>
                        <div class="mb-3">
                            <label for="file_khs" class="form-label">Scan khs</label>
                            <input type="file" class="form-control" id="file_khs" name="file_khs" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    