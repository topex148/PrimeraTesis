<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Itinerario extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['RIF_4','id_P_3','id_Cliente_1','Fecha_Inicio','Fecha_Final'];

    public function prestadore(){
      return $this->belongsTo(Prestadore::class, 'RIF_4');
    }

    public function turista(){
      return $this->belongsTo(Turista::class, 'id_Cliente_1');
    }

    public function paquete(){
      return $this->belongsTo(Paquete::class, 'id_P_3');
    }


}
