<?php

namespace App\Prenda;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
  protected $table      = 'Prenda';
  protected $primaryKey = 'prenda_id';


  protected $fillable   = [
      'prenda_id','marca','talla','color','estado'
  ];

}
