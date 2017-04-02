<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ejemplars';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'marcaje';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAnimal','fechaNacimiento', 'fechaIngreso', 'sexo', 'alias'];

    
}
