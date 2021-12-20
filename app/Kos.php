<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
  protected $table = 'kos';
  protected $primaryKey = 'id_kos';
  public $timestamps = false;
}
