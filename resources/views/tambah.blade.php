@extends('main/induk')

@section('judul')
  Dashboard
@endsection('judul')

@section('konten')

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-title">Tambah Data Kos</h1>
                            <form class="" action="{{ url("/dashboard") }}" method="post">
                              @csrf
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Pemilik</label>
                                <input class="form-control" type="text" placeholder="Nama Pemilik" id="example-text-input" name="nama">
                              </div>
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Alamat</label>
                                <input class="form-control" type="text" placeholder="Alamat" id="example-text-input" name="alamat">
                              </div>
                              <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                              <a href="{{ url("/dashboard") }}" class="btn btn-danger mt-4 pr-4 pl-4">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('konten')
