<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idEspecie';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idFamilia', 'nombre'];

    
}
