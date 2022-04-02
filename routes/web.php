<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UisController;
use App\Http\Controllers\HomeController;

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

//Pagina en donde se va estar administrando las vistas de quien entra en la pagina
//Aqui es donde se debe presentarse el inicio de sesion

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/', function () {
    //return view('welcome');
});

Route::controller(UisController::class)->group(function () {
    Route::get('uis/index', 'index')->name('inicio.index');
    Route::get('uis/formulario', 'show')->name('show.formulario');
    //Route::get('uis/formulario/{id}', 'show')->name('show.formulario');
    Route::get('uis/formularios', 'showMore')->name('showMore.formularios'); 
    Route::get('uis/eliminar', 'remove')->name('eliminar.remove');
    Route::get('uis/crear', 'create')->name('crear.create');
    Route::get('uis/busqueda','search')->name('busqueda.search');
    Route::get('uis/color','color')->name('color.color');
});
