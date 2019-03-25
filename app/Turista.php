<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turista extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['Pais_P','Estado_P'];

    public function itinerario(){
      return $this->hasMany(Itinerario::class);
    }
}
