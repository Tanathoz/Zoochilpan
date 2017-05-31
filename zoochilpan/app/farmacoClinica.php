<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class farmacoClinica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'farmaco_clinicas';

    /**
    * The database primary key value.
    *
    * @var string
    */


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idClinica', 'idFarmaco', 'dosis', 'frecuencia','fechaAplicacion'];

    
}
