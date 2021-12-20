<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Data;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anggota');
        // echo $id_kos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kos)
    {
      return view('anggota', ['id' => $id_kos ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $anggota = new Anggota;
      $anggota->nama_mhs = $request->nama;
      $anggota->jk = $request->jk;
      $anggota->tgl_lahir = $request->tgl;
      $anggota->asal = $request->asal;
      $anggota->no_hp = $request->no;
      $anggota->sosmed_ig = $request->sosmed;
      $anggota->no_ortu = $request->hp;
      $anggota->save();

      $id = Anggota::where('no_hp', $request->no)->get()->first();
      $data = new Data;
      $data->id_mhs = $id->id_mhs;
      $data->id_kos = $request->id_kos;
      $data->save();

      return redirect('/mahasiswa')->with('status', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $mhs = Anggota::all();
        return view('mahasiswa', ['maha' => $mhs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $id = $request->id;
      Anggota::destroy($id);
      return redirect('/mahasiswa')->with('status', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $cari = Anggota::where('nama_mhs', $request->cari)->get();
        return view('search', ['satu' => $cari]);
    }

    public function hasil()
    {
        return view('search');
        // echo $id_kos;
    }

}
