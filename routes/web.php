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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Articulo;
use App\Http\Controllers\RutaController;

Route::get('/', 'RutaController@inicio');
Route::get('/inicio', 'RutaController@inicio');
Route::get('/compras/{articulo_id}', 'RutaController@compras');


Auth::routes();