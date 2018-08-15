<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\Compra;

class RutaController extends Controller
{
    public function inicio() {
        
        $articulos = Articulo::all();
        return view('inicio', compact('articulos'));
        
    }
    
    public function compras($articulo_id) {
        
        $compra = new Compra;
        $compra->cliente_id = Auth::user()->id;
        $compra->articulo_id = $articulo_id;
        
        $compra->save();
        
        $articulos = Articulo::all();
        return view('inicio', compact('articulos'));
        
    }
}
