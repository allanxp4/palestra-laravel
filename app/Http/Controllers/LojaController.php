<?php

namespace App\Http\Controllers;
use App\Loja;


use Illuminate\Http\Request;

class LojaController extends Controller
{
    function get(){
        return Loja::all();
    }
    
    function post(Request $request){
        return Loja::create($request->all());
        

    }

    function getById(int $id){
        $lojas = Loja::find($id);
        if(!$lojas){
            return response(['erro' => 'não encontrado'], 404);
        }
        return $lojas;
    }

    function delete(int $id){
        return Loja::destroy($id);
    }

    function getVeiculos(int $id){
        return Loja::find($id)->veiculos;
    }
}
