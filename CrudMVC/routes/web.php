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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'clientes'], function () {
    Route::get('/listar', 'ClientesController@listar')->middleware('auth');
});

Route::group(['prefix' => 'produtos'], function () {
    Route::get('/adicionar', 'ProductsController@addView')->middleware('auth');
    Route::post('/cadastrar', 'ProductsController@store')->middleware('auth');
    Route::get('/listar', 'ProductsController@list')->middleware('auth');
});

Route::group(['prefix' => 'categorias'], function () {
    Route::get('/adicionar', 'CategoriasController@addView')->middleware('auth');
    Route::post('/cadastrar', 'CategoriasController@store')->middleware('auth');
    Route::get('/listar', 'CategoriasController@list')->middleware('auth');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles','RoleController');
});

