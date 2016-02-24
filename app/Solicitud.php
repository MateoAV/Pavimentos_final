<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id_solicitud';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Crea la relación entre la tabla de solicitudes y elementos. 1 to many.
     */
    public function detalles()
    {
        return $this->hasMany('App\Detalle', 'id_solicitud');
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Proyecto', 'id_proyecto');
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'id_usuario');
    }

}
