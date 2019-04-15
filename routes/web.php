<?php

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

//Padrão
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return 'Frase 1';
});

Route::get('/produtos', 'ProdutoController@listar');
Route::get('/produtos/mostrar/{id}', 'ProdutoController@mostrar');
Route::get('/produtos/remove/{id}', 'ProdutoController@remover');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/add', 'ProdutoController@add');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');
/*
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/