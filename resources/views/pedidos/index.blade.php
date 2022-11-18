@extends('layouts.app')

@section('content')
<h1>pedidos</h1>

<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
<div class="card">
    <div class="card-header">
        Lista de productos
    </div>
    <div class="p-4">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">TimeStamp</th>
                    <th scope="col" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach($pedidos as $pedido){
                ?>

                <tr>
                    <td scope="row"><?php echo $pedido->id; ?></td>
                    <td><?php echo $pedido->Articulo; ?></td>
                    <td><?php echo $pedido->Cantidad; ?></td>
                    <td><?php echo $pedido->Precio; ?></td>
                    <td><a class="text-success" href="editar.php?c<?php echo $pedido->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?c<?php echo $pedido->id; ?>"><i class="bi bi-trash"></i></a></td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>
</div>

@endsection
