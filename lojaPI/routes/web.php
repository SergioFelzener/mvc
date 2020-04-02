<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/avisos', function (){
    return view ('avisos', ['nome' => 'Sergio', 'mostrar' => true, 'avisos'=> [['id'=> 1, 'texto' => 'Aviso 1'], ['id'=> 2, 'texto'=> 'Aviso 2'], ['id'=> 3, 'texto' => 'Aviso 3'], ['id'=> 4, 'texto' => 'Aviso 4'],]]);
});

Route::group(['prefix' => 'clientes'], function(){

});
