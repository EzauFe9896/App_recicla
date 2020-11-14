<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroVoluntarioController;
use App\Http\Controllers\SolicitaTransporteController;
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
    return view('inicio');
});


// Ruta que redirige a la calculadora
Route::get('/calculadora', function () {
    return view('calculadora');
});

// Ruta que redirige a los videos o recursos
Route::get('/recurso', function () {
    return view('recurso');
});

// Ruta de autenticación
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta del form resgistro voluntario
Route::get('registro/add',[RegistroVoluntarioController::class, 'create']);
Route::post('registro/add',[RegistroVoluntarioController::class, 'store']);

// Ruta del form solicitar transporte
Route::get('solicitud/add',[SolicitaTransporteController::class, 'create']);
Route::post('solicitud/add',[SolicitaTransporteController::class, 'store']);

// Ruta del form para enviar información
Route::get('contacto/add' , 'ContactanosController@create');
Route::post('contacto/add','ContactanosController@store');
