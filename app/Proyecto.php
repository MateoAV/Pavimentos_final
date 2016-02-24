<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'Proyectos';
    protected $primaryKey = 'id_proyecto';


    public function solicitudes()
    {
        return $this->hasMany('App\Solicitud', 'id_proyecto');
    }
}
