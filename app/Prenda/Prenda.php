<?php

namespace App\Prenda;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
  protected $table      = 'Prenda';
  protected $primaryKey = 'Prenda_id';


  protected $fillable   = [
      'Prenda_id','tipo','marca','talla','color','estado'
  ];



  public function Imagen()
  {
      return $this->hasOne('Imagen::class');
  }

}
