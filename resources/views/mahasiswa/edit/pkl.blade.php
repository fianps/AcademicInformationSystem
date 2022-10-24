@extends('mahasiswa/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="p">Mahasiswa</p>
              <p class="p">Fakultas Sains dan Matematika</p>
          </div>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                    <form action="/edit-pkl/{{$pkl->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected>{{$pkl->status}}</option>
                                <option value="Lulus">Lulus</option>
                                <option value="Proses">Proses</option>
                                <option value="Belum Ambil">Belum Ambil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai" class="form-label">Nilai</label>
                            <select class="form-select" aria-label="Default select example" name="nilai">
                                <option selected>{{$pkl->nilai}}</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file_pkl" class="form-label">Scan Berita Acara</label>
                            {{--get file input--}}
                            <input type="file" class="form-control" id="file_pkl" name="file_pkl" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    