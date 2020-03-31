<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class graella extends Model
{
    protected $fillable = ['IdGraella', 'NomCanal', 'NomPrograma', 'Dia', 'Hora'];

}
