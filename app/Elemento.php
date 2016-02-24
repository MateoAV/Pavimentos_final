<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    protected $table = 'Elementos';
    protected $primaryKey = 'id_elemento';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Recupera los elementos de acuerdo al tipo de material.
     */

    public function tipos()
    {
        return $this->belongsTo('App\Tipo', 'id_tipo');
    }

    public function detalles(){
        return $this->hasMany('App/Detalle', 'id_elemento');

    }
}


