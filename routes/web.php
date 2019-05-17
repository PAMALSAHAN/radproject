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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::get('/', function () {
  //  return view('home');
//});

Route::get('/','CreatesController@home'); 
//the home function in the CreatesController

Route::get('/create',function(){
  return view('create');  // keep that on mind if we use create it not work
  //inc we use because create blade file is inside the inc folder
});

Route::post('/insert','CreatesController@add'); 