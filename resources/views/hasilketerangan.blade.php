@extends('main/induk')

@section('judul')
  Data Kos
@endsection('judul')

@section('konten')

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="header-title">Data Kos</h1>
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
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $satu as $data )
                            <tr>
                                <th scope="row">{{ $data->id_rel }}</th>
                                <td>{{ $data->nama_mhs }}</td>
                                <td>{{ $data->jk }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->alamat_kos }}</td>
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
