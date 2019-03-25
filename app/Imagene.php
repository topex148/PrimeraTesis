<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagene extends Model
{
    //
    use SoftDeletes;
    public $incrementing = false;
    protected $primaryKey = 'nombre';
    protected $dates = ['deleted_at'];

    protected $fillable = ['imagen','nombre'];

}
