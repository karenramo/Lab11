<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index() {
        $pedidos = pedidos::all();
        return view('pedidos/index', compact('pedidos'));
    }
}
