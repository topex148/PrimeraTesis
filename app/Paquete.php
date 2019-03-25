<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paquete extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['Fecha_Inicio','Fecha_Final'];

    public function itinerario(){
      return $this->hasMany(Itinerario::class);
    }
}
