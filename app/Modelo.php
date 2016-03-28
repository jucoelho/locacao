<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    //
    public function veiculo()
    {
    	$this->hasMany('App\Veiculo');
    }
}
