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


//tabeliao

Route::get('/tabeliao', 'TabeliaoController@index')->name('tabeliao.index');
Route::get('/tabeliao/adicionar', 'TabeliaoController@adicionar')->name('tabeliao.adicionar');
Route::post('/tabeliao/salvar', 'TabeliaoController@salvar')->name('tabeliao.salvar');
Route::get('/tabeliao/editar/{id}', 'TabeliaoController@editar')->name('tabeliao.editar');
Route::put('/tabeliao/atualizar/{id}', 'TabeliaoController@atualizar')->name('tabeliao.atualizar');
Route::delete('/tabeliao/deletar/{id}', 'TabeliaoController@deletar')->name('tabeliao.deletar');

//certidão

Route::get('/certidao', 'CertidaoController@index')->name('certidao.index');
Route::get('/certidao/adicionar', 'CertidaoController@adicionar')->name('certidao.adicionar');
Route::post('/certidao/salvar', 'CertidaoController@salvar')->name('certidao.salvar');
Route::get('/certidao/editar/{id}', 'CertidaoController@editar')->name('certidao.editar');
Route::put('/certidao/atualizar/{id}', 'CertidaoController@atualizar')->name('certidao.atualizar');
Route::delete('/certidao/deletar/{id}', 'CertidaoController@deletar')->name('certidao.deletar');


//contrato

Route::get('/contrato', 'ContratoController@index')->name('contrato.index');
Route::get('/contrato/adicionar', 'ContratoController@adicionar')->name('contrato.adicionar');
Route::post('/contrato/salvar', 'ContratoController@salvar')->name('contrato.salvar');
Route::get('/contrato/editar/{id}', 'ContratoController@editar')->name('contrato.editar');
Route::put('/contrato/atualizar/{id}', 'ContratoController@atualizar')->name('contrato.atualizar');
Route::delete('/contrato/deletar/{id}', 'ContratoController@deletar')->name('contrato.deletar');