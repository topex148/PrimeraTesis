<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestadore extends Model
{
    //
    use SoftDeletes;
    public $incrementing = false;
    protected $primaryKey = 'RIF';
    protected $dates = ['deleted_at'];
    protected $fillable = ['RIF','Telefono','RTN','DescripcionPrestador','DescripcionServicio','Nombre','imagen','Facebook','Twitter','Instagram'];

    public function itinerario(){
      return $this->hasMany(Itinerario::class);
    }

    public function foto(){
      return $this->hasMany(Foto::class);
    }


}
