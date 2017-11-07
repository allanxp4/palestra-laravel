<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ["placa", "renavam", "marca", "ano", "loja_id"];
    function loja(){
        $this->belongsTo('App\Loja');
    }
}
