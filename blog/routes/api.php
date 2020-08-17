<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Eu só consegui fazer a implementação no back-end. Ainda tenho um pouco de dificuldade no vue. =/ Acabei demorando muito para fazer coisas que não eram prioridades para o desenvolvimento do CRUD, e isso acabou ocupando muito tempo do exercicio, mas vou estudar mais e tentar obter resultados melhores e desenvolver melhor a minha protividade 

Route::post('create', "PersonController@create");
Route::post('update/{id}' ,'PersonController@update');
Route::post('delete/{id}', 'PersonController@destroy');
