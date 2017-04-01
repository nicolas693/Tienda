<?php

namespace App\Prenda;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $table      = 'Imagen';
  protected $primaryKey = 'Imagen_id';


  protected $fillable   = [
      'Prenda_id','imagen1','imagen2','imagen3','imagen4','imagen5','imagen6','imagen7'
  ];


  public function Prenda()
  {
      return $this->belongsTo('Prenda::class');
  }
}
