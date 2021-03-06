<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class farmacoProfilaxis extends Model
{
    protected $table = 'farmacoprofilaxis';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProfilaxis','idFarmaco','dosis', 'frecuencia','fechaAplicacion'];
}
