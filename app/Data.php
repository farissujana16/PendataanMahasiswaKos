<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
  protected $table = 'data';
  protected $primaryKey = 'id_rel';
  public $timestamps = false;
}