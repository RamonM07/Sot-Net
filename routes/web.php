<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AsignaCaracterísticasController;
use App\Http\Controllers\ClienteController;

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
Route:: group(['prefix'=>'inicio', 'as'=>'inicio'], function () {
    Route:: get ("/ofertas", function ()
    {
        return view ('inicio.ofertas');
    });
    Route:: get ("/informacion", function ()
    {
        return view ('inicio.informacion');
    });
    Route:: get ("/mapa", function ()
    {
        return view ('inicio.mapa');
    });
    Route:: get ("/licencias", function ()
    {
        return view ('inicio.licencias');
    });
    Route:: get ("/solicitudes", function ()
    {
        return view ('inicio.solicitudes');
    });
    Route:: get ("/servicios", function ()
    {
        return view ('inicio.servicios');
    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('packages',PaqueteController::class);
Route::resource('characteristics',CaracteristicaController::class);
Route::resource('services',ServicioController::class);
Route::resource('users',UsuarioController::class);
Route::resource('clients',ClienteController::class);
Route::post('/services/create',[AsignaCaracterísticasController::class, 'store']);
