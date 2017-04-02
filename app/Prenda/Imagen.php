<?php

namespace App\Prenda;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $table      = 'Imagen';
  protected $primaryKey = 'Imagen_id';


  protected $fillable   = [
      'Prenda_id','imagen'
  ];


  public function Prenda()
  {
      return $this->belongsTo('Prenda::class');
  }
}
