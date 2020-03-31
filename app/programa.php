<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    protected $fillable = ['NomPrograma', 'Descripcio','Classificacio','Tipus'];
}
