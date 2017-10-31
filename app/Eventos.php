<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'local',
        'data_evento'
    ];
}
