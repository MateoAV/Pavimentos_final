<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'Tipos';
    protected $primaryKey = 'id_tipo';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Recupera los elementos de acuerdo al tipo de material.
     */

    public function elementos()
    {
        return $this->hasMany('App\Elemento', 'id_tipo');
    }
}
