<?php

namespace Zoochilpan;

use Illuminate\Database\Eloquent\Model;

class Familium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'familias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idFam';
    public $incrementing = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idOrden', 'nombre'];

    public static function familis($id){
        return Familium::where('idOrden','=',$id)
        ->get();
    }
}
