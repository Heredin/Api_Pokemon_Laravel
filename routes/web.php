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
Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname='apellido'){
    return 'Hola soy '.$name.$lastname;
});


Route::get('/hi',function(){
  return 'hola';
});
Route::get('prueba/{param}','PruebaController@prueba');

Route::resource('trainers','TrainerController');
//Route::resource('pokemons','PokemonController');
Route::get('trainers/{trainer}/pokemons','PokemonController@index');
Route::post('trainers/{trainer}/pokemons','PokemonController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
