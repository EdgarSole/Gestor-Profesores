<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    protected $table = 'coordinadores';
    public $timestamps = false;

    protected $fillable = ['id_centro', 'id_ciclo', 'dni'];
}

