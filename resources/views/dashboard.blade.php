@extends('main/induk')

@section('judul')
  Dashboard
@endsection('judul')

@section('konten')

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="header-title">Data Kos</h1>
            <a href="{{ url("/tambah") }}" class="btn btn-info mb-3">Tambah Data</a>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $kos as $data )
                            <tr>
                                <th scope="row">{{ $data->id_kos }}</th>
                                <td>{{ $data->alamat_kos }}</td>
                                <td>{{ $data->nama_kos }}</td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{ url("/kos/anggota/$data->id_kos") }}" class="text-secondary"><i class="fa fa-plus-square-o"></i></a></li>
                                        <li>
                                          <form class="" action="{{ url('/dashboard') }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="text-danger">
                                              <i class="ti-trash"></i>
                                            <input type="hidden" name="id" value="{{ $data->id_kos }}">
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
