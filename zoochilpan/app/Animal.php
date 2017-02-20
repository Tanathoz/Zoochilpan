<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    protected $table  ="Animal";
    protected  $primaryKey ='id';
    protected $fillable=['id','nombreCientifico','nombreComun','familia',
    'clase','orden','especie','habitat','gestacion','camada',
    'longevidad','peso','ubicacionGeografica','Alimentacion'];
}
