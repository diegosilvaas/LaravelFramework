<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
    // return view('welcome');
// });

// Route::view('/jogos','jogos');


// Route::view('/jogos', 'jogos', ['name'=>'GTA']);

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos',['idJogo'=>$id, 'nomeJogo'=>$name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/jogos', function () {
    return view('jogos');
});