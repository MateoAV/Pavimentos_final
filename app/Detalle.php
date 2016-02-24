<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'Detalle';
    public $timestamps = false;
    protected $primaryKey = 'id_detalle';
    protected $fillable = ['id_solicitud', 'id_elemento', 'cantidad'];
    public function elemento()
    {
        return $this->belongsTo('App\Elemento', 'id_elemento');
    }

    public function solicitud()
    {
        return $this->belongsTo('App\Solicitud', 'id_solicitud');
    }

    public function dia()
    {
        return $this->belongsTo('App\Dia', 'id_dia');
    }
}
