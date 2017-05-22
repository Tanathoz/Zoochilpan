<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Necropsium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'necropsias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lugar', 'marcajeEjemplar','fecha', 'hora', 'antecedentes', 'diagnosticoMuerte', 'estadoFisico', 'lesiones', 'toracica', 'abdominal'];

    
}
