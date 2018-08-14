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

Route::get('/', function () {
    
    $articulos = Articulo::all();
    return view('inicio', compact('articulos'));
});

Route::get('/inicio', function () {
        
    $articulos = Articulo::all();
    return view('inicio', compact('articulos'));
});

Auth::routes();