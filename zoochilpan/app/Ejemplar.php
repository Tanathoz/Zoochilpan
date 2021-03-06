<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Ejemplar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ejemplares';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'marcaje';
    public $incrementing = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marcaje','idAnimal','fechaNacimiento', 'fechaAlta', 'sexo', 'nombrePropio'];

    
}
