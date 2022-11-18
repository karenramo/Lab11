<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use Illuminate\Http\Request;

class createPedidosController extends Controller
{

    public function create($id) {
        return view('pedidos/create', compact('id'));
    }

    public function subirPedido(Request $request) {

            $id = auth()->user()->id;
            $pedido = new pedidos;
            $pedido->User_id = $id;
            $pedido->Foto_id = $request->oculto;
            $pedido->Precio = $request->Precio;
            $pedido->Cantidad = $request->Cantidad;
            $pedido->save();
            return redirect('/pedidos');
    }
}
