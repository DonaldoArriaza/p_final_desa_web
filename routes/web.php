<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/index', function () {
    return view('index'); 
});

Route::get('/', function () {
    return view('p_inicio'); 
});



/* clientes */

/* Route::view(uri:'/clientes', view:'clientes.index'); */
Route::get('/clientes', [ClienteController::class, 'index']);

Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit']);
 
/* ** */

/* Acceso */
Route::view(uri:'/login', view: 'acceso.login');
Route::post('/login', [UserController::class, 'login']);

/* ** */