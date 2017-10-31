<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $primaryKey = 'id';
	protected $fillable   = [ 
		'texto',
		'situacao',
		'id_categoria',

	];

/*
    public function categoria()
    {
        return $this->belongsTo('Categoria');
    }
*/
      public function categoria(){
        return $this->hasOne('App\Categoria', 'id', 'id_categoria');
    } 



}
