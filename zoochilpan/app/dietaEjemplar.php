<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class dietaEjemplar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dietaejemplar';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'marcajeEjemplar';
    public $incrementing = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marcajeEjemplar', 'fechaCambio', 'causaCambio', 'cantidad', 'alimento', 'horario', 'consideraciones'];

    
}
