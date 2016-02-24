<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table = 'Dias';
    protected $primaryKey = 'id_dia';

    public function detalles()
    {
        return $this->hasMany('App\Detalle', 'id_dia');
    }
}
