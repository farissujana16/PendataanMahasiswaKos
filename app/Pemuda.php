<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemuda extends Model
{
  protected $table = 'user';
  protected $primaryKey = 'id_user';
  public $timestamps = false;
}
