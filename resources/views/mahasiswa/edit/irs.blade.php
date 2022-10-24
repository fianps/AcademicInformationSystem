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
                    <form action="/edit-irs/{{$irs->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester Aktif</label>
                            {{--select semester--}}
                            <select class="form-select" aria-label="Default select example" name="semester">
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
                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="text" class="form-control" id="sks" name="sks" value="{{ $irs->sks }}">
                        </div>
                        <div class="mb-3">
                            <label for="file_irs" class="form-label">Scan IRS</label>
                            {{--get file input--}}
                            <input type="file" class="form-control" id="file_irs" name="file_irs" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    