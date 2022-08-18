<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@index')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@index')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/contato', 'ContatoController@store')->name('site.contato');

Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::fallback(function(){
   echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir à página inicial' ;
});



