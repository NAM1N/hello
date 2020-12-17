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

Route::get('/bonjour/{pnom}', function() {
   
    $pnom=request('pnom');
  return view('pages/bonjour')->with(['pnom'=>$pnom]);
      //return 'bonjour famille'.request('pnom');
});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/inscrit',function(){

    return view('pages.inscrit');
});

Route::post('/inscrit',function(){

    return 'message reçu';
});