<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'AuthenticateController@authenticate');



Route::middleware('jwt.auth')->prefix('/loja')->group(function(){
    Route::get('', 'LojaController@get');
    Route::get('/{id}', 'LojaController@getById');
    Route::get('/{id}/veiculos', 'LojaController@getVeiculos');\    
    Route::post('', 'LojaController@post');
    Route::delete('/{id}', 'LojaController@delete');
});


/*
*
*
Algo: Isso faz isso
*
*
Outra coisa: retorna isso
*/
Route::resource('/veiculo', 'VeiculoController');


