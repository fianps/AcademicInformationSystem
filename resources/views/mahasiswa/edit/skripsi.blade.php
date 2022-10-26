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
                    <form action="/edit-skripsi/{{$skripsi->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected>{{$skripsi->status}}</option>
                                <option value="Lulus">Lulus</option>
                                <option value="Proses">Proses</option>
                                <option value="Belum Ambil">Belum Ambil</option>
                            </select>
                        </div>
                        <div class="mb-3">
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
                        <div class="mb-3">
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
                        <div class="mb-3">
                            <label for="tgl_sidang" class="col-1 col-form-label">Tanggal Sidang</label>
                            <div class="col-5">
                              <div class="input-group date" id="datepicker">
                                <input type="date" class="form-control" id="tgl_sidang"/>
                                {{-- <span class="input-group-append">
                                  <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </span> --}}
                              </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="file_skripsi" class="form-label">Scan Berita Acara</label>
                            {{--get file input--}}
                            <input type="file" class="form-control" id="file_skripsi" name="file_skripsi" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    