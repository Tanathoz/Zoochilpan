<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table  ="Animal";
    protected $fillable=['id','nombreCientifico','nombreComun','familia',
    'clase','orden','especie','procedencia','habitat','gestacion','camada',
    'longevidad','sexo','peso','ubicacionGeografica','Alimentacion','datoCurioso'];
}
