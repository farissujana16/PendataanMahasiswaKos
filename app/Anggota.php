<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
  protected $table = 'mahasiswa';
  protected $primaryKey = 'id_mhs';
  public $timestamps = false;
}
