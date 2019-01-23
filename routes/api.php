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

Route::resource('user', 'UserController');

Route::resource('viagem', 'ViagemController');

//Pesquisa de viagem
Route::post('viagem/search', 'ViagemController@search');
//localhost:8000/api/viagem/aveiro/porto/2019-01-01/2019-01-01

Route::resource('tipo', 'TipoController');

Route::resource('produto', 'ProdutoController');

Route::resource('review', 'ReviewController');

Route::post('user/media', 'UserController@calcMediaReview');