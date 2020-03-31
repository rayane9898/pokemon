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


//POKEMON
Route::get("/", "PokemonController@index");
Route::get("/createPokemon", "PokemonController@create")->name("createPokemon");
Route::post("/storePokemon", "PokemonController@store")->name('storePokemon');
Route::get("/editPokemon/{id}", "PokemonController@edit");
Route::get("/showPokemon/{id}", "PokemonController@show")->name("showPokemon");
Route::post("/upadatePokemon", "PokemonController@update");
Route::get("destroyPokemon", "PokemonController@destroy");