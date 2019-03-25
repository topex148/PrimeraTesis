<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atractivo extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['zona_id', 'Nombre_Atractivo', 'Ubicacion','imagen', 'Descripcion_Atractivo'];

    public function zona(){
      return $this->belongsTo(Zona::class);
    }

    public function foto(){
      return $this->hasMany(Foto::class);
    }
}
