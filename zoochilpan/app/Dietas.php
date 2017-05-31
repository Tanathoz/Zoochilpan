<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Dietas extends Model
{
    protected $table = 'dietas';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'idAnimal';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAnimal','cantidad', 'alimento', 'horario', 'consideraciones'];

}
