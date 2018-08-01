<?php

namespace CajaChica;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table='gastos';
    protected $primaryKey='id';
    public $timestamps=false;
   
}
