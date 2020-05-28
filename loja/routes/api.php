<?php

use App\Http\Controllers\VendedoresController;
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

Route::group(['middleware' => 'auth.jwt', 'prefix'=> 'v1'], function(){
    Route::get('/Vendedores', 'VendedoresController@index');
    Route::post('/Vendedores', 'VendedoresController@store');
    Route::delete('Vendedores/{id}', 'VendedoresController@destroy');
    Route::get('/Vendedores/{id}', 'VendedoresController@show');
    Route::put('/Vendedores/{id}', 'VendedoresController@update');
});

Route::post('/login', 'APIController@login');
Route::get('/login', 'APIController@logout');
