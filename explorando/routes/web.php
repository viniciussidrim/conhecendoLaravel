<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\funcionalidades;
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

//Rota Raiz
Route::get('/', function () {
    return view('pg_inicial');
});


//POSSIVEIS ROTAS
//Rota verificar resultados
Route::get('/index', [funcionalidades::class, 'index']);

//Rota lista times
Route::get('/listar_times', [funcionalidades::class, 'nome_times']);

//Rota Adicionar times
Route::get('/adicionar_times', [funcionalidades::class, 'create']);



