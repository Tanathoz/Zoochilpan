<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'veterinarios';

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
    protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','sexo','especialidad','areaEncargada'];

    
}
