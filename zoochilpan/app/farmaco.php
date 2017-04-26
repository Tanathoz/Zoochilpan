<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class farmaco extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'farmacos';

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
    protected $fillable = ['nombre', 'via'];

    
}
