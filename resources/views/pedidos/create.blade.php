@extends('layouts.app')

@section('content')

<h1>Crear pedidos</h1>

<form class="form-group" method="POST" action="{{ route('subirPedido') }}" role="form">

    {{ csrf_field() }}

    <div class="mb-3">
        <label class="form-label">Cantidad de articulos: </label>
        <input type="number" class="form-control" name="Cantidad" autofocus required>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio del articulo</label>
        <input type="number" class="form-control" name="Precio" autofocus required>
    </div>
    <div class="mb-3">
    <div class="d-grid">
        <input type="hidden" name="oculto" value="{{$id}}">
        <input type="submit" class="btn btn-primary" value="Registrar">
    </div>
</form>

@endsection
