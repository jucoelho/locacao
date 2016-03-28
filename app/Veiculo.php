<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //
    public function modelo()
    {
    	return $this->belongsTo('App\Modelo');
    }

    public function locacao()
    {
    	 return $this->belongsToMany('App\Locacao');
    }

    public function getModeloName()
    {
		return $this->modelo->nome;
    }
}
