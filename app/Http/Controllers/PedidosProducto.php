<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;


class PedidosProducto extends Controller
{
    public function index(){
        $pedido = Pedido::find(1);
        $producto = Producto::find(2);
        return view('welcome', compact('pedido', 'producto'));
    }
}
