<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = ["nome", "endereco", "telefone"];

    function veiculos(){
        return $this->hasMany('App\Veiculo');
    }
}
