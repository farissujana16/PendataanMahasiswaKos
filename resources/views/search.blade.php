@extends('main/induk')

@section('judul')
  Data Mahasiswa
@endsection('judul')

@section('konten')

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="header-title">Data Mahasiswa</h1>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <div class="single-table">
              <form class="" action="{{ url("/search") }}" method="post">
                @csrf
                  <div class="form-row align-items-center">
                      <div class="col-sm-5 my-1">
                          <label class="sr-only" for="inlineFormInputName">Name</label>
                          <input type="text" class="form-control" id="inlineFormInputName" placeholder="Search..." name="cari">
                      </div>
                      <div class="col-auto my-1">
                          <button type="submit" class="btn btn-success">Cari</button>
                      </div>
                  </div>
              </form>
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Asal</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Sosmed</th>
                                <th scope="col">No Ortu</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $satu as $mhs )
                            <tr>
                                <th scope="row">{{ $mhs->id_mhs }}</th>
                                <td>{{ $mhs->nama_mhs }}</td>
                                <td>{{ $mhs->jk }}</td>
                                <td>{{ $mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->asal }}</td>
                                <td>{{ $mhs->no_hp }}</td>
                                <td>{{ $mhs->sosmed_ig }}</td>
                                <td>{{ $mhs->no_ortu }}</td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li>
                                          <form class="" action="{{ url('/mahasiswa') }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="text-danger">
                                              <i class="ti-trash"></i>
                                            <input type="hidden" name="id" value="{{ $mhs->id_mhs }}">
                                          </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('konten')
