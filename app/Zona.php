<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zona extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','Descripcion_Zona','imagen1','imagen2','imagen3'];

    public function atractivo(){
      return $this->hasMany(Atractivo::class);
    }

    public function foto(){
      return $this->hasMany(Foto::class);
    }
}
