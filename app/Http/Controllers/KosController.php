<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kos;
use App\Keterangan;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Kos::all()->sortBy('nama_kos');
        return view('dashboard', ['kos' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kos = new Kos;
        $kos->nama_kos = $request->nama;
        $kos->alamat_kos = $request->alamat;
        $kos->save();
        return redirect('/dashboard')->with('status', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('tambah');
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
      Kos::destroy($id);
      return redirect('/dashboard');
    }

    public function data()
    {
      $data = Keterangan::all();
        return view('keterangan', ['ket' => $data]);
    }

    public function search(Request $request)
    {
        $cari = Keterangan::where('nama_mhs', $request->cari)->get();
        return view('hasilketerangan', ['satu' => $cari]);
    }

    public function hasil()
    {
        return view('hasilketerangan');
        // echo $id_kos;
    }
}
