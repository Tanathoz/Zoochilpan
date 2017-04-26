<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    protected $table  ="Animal";
    public $incrementing = true;
    protected  $primaryKey ='id';
    protected $fillable=['nombreCientifico','nombreComun','familia',
    'clase','orden','especie','habitat','gestacion','camada',
    'longevidad','peso','ubicacionGeografica','Alimentacion'];
}
