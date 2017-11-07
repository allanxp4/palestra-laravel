<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function funcaoTeste(){
        return view('batata')->with('umavar', 'blablablabla');
    }
}
