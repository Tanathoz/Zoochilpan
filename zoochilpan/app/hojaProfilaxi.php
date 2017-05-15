<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class hojaProfilaxi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hojaprofilaxis';

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
    protected $fillable = ['lugar', 'fecha','marcajeEjemplar', 'tratamiento', 'fechaAplicacion', 'observaciones', 'comentarios','idVeterinario','idEncargado'];

    
}
