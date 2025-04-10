<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';
    public $timestamps = false;

    protected $fillable = ['id_centro', 'id_ciclo', 'dni'];
}

