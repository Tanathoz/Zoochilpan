<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class hojaclinica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hojaclinicas';

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
    protected $fillable = ['lugar', 'fecha', 'antecedentes', 'diagnostico', 'tratamiento', 'fechaAplicacion', 'observaciones', 'comentarios', 'resultados', 'marcajeEjemplar', 'idVeterinario','idEncargado'];

    
}
