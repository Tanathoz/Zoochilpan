<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'siniestros';

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
    protected $fillable = ['idNecropsia', 'medidaPreventiva', 'nombreMedida', 'apellidoPaternoMedida', 'apellidoMaternoMedida'];

    
}
