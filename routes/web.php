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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos','ProdutosController@index')->name('produtos.index');
Route::group(['middleware' => ['checkAuth']], function () {
    Route::post('/produtos','ProdutosController@store')->name('produtos.store');
    Route::get('/produtos/create','ProdutosController@create')->name('produtos.create');
    Route::get('/produtos/{id}','ProdutosController@show')->name('produtos.show');
    Route::get('/produtos/{produto}/edit','ProdutosController@edit')->name('produtos.edit');
    Route::put('/produtos/{produto}','ProdutosController@update')->name('produtos.update');
    Route::delete('/produtos/{produto}','ProdutosController@destroy')->name('produtos.destroy');
});
Route::post('/produtos/busca','ProdutosController@busca')->name('produtos.buscar');


//route::resource('/produtos','ProdutosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
