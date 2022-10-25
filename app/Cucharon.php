<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucharon extends Model
{
    protected $fillable = ["numero", "compania","caracteristicas",
    "fecha_ingreso", "procedimiento", "fecha_entrega","entrada_cucharon"];
    //
}
