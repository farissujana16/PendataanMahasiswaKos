@extends('main/induk')

@section('judul')
  Data Penghuni
@endsection('judul')

@section('konten')

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="header-title">Data Penghuni</h1>
            <form class="" action="{{ url("/cari") }}" method="post">
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
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Alamat Kos</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $ket as $data )
                            <tr>
                                <th scope="row">{{ $data->id_rel }}</th>
                                <td>{{ $data->nama_mhs }}</td>
                                <td>{{ $data->jk }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->alamat_kos }}</td>
                                <td>
                                  <ul class="d-flex justify-content-center">
                                    <li class="mr-3"><a href="{{ url("/kartu/$data->id_rel") }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
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
