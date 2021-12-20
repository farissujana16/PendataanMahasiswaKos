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
                            <h1 class="header-title">Tambah Data Anggota</h1>
                            <form class="" action="{{ url('/mahasiswa') }}" method="post">
                              @csrf
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Nama Mahasiswa</label>
                                <input class="form-control" type="text" placeholder="Nama Mahasiswa" id="example-text-input" name="nama">
                              </div>
                              <div class="form-group">
                                  <label class="col-form-label">Jenis Kelamin</label>
                                  <select class="custom-select" name="jk">
                                      <option value="L">Laki-Laki</option>
                                      <option value="P">Perempuan</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="example-date-input" class="col-form-label">Tanggal Lahir</label>
                                  <input class="form-control" type="date" placeholder="05-06-1999" id="example-date-input" name="tgl">
                              </div>
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Asal</label>
                                <input class="form-control" type="text" placeholder="Alamat" id="example-text-input" name="asal">
                              </div>
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">No Hp</label>
                                <input class="form-control" type="text" placeholder="No Hp" id="example-text-input" name="no">
                              </div>
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Sosial Media</label>
                                <input class="form-control" type="text" placeholder="Instragram" id="example-text-input" name="sosmed">
                              </div>
                              <div class="form-group">
                                <label for="example-text-input" class="col-form-label">No Hp Orang Tua</label>
                                <input class="form-control" type="text" placeholder="No Orang Tua" id="example-text-input" name="hp">
                              </div>
                              <input type="hidden" name="id_kos" value="{{ $id }}">
                              <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
