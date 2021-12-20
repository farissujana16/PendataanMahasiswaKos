<?php

namespace App\Http\Controllers;
use App\Keterangan;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('card');
    }

    public function tampil($id_kartu)
    {
      $data = Keterangan::where('id_rel', $id_kartu)->get();
        return view('card', ['id' => $data]);
        // return view('card');
    }
}
