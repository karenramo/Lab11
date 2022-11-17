@extends('layouts.app')

@section('content')
<main>
    <style>
        body{
            background-color: #FFEEE5;
        }
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
        .container{
            background-image: url(https://svn.red-bean.com/repos/kfogel/trunk/www/images/parchment-background.jpg);
            width: auto;
            height: auto;
            border-radius: 1 px;
            background-size: 100% auto;
        }
        
    </style>


    <div class="album py-5 bg-light">
        <div class="container">
            <h2> los envios están aquí:
            </h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($envios as $envio)
                <p>{{$envio->ruta}}</p>                
                @foreach($envio->foto as $foto)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="200" src="/foto/{{$foto->ruta}}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">{{$foto->descripcion}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p> <i class="bi bi-chat-dots"></i>
                                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$foto->id}}" aria-expanded="false" aria-controls="collapseExample">
                                            <x-bi-chat class="text-primary" /> {{count($foto->comentario)}}
                                        </button>
                                    </p>
                                </div>
                                <small class="text-muted">{{$foto->User->name}}</small>
                            </div>
                            <div class="collapse" id="collapseExample{{$foto->id}}">
                                @foreach($foto->comentario as $comentario)
                                <div class="card card-body">
                                    {{$comentario->comentario}}
                                </div>
                                <small class="text-muted">{{$comentario->User->name}}</small>
                                @endforeach
                                <form method="POST" action="{{ route('subirComentario') }}" >
                                @csrf
                                    <div class="form-group">
                                        <div class="mt-2 row g-3">
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="comentario" aria-describedby="emailHelp" placeholder="Ingrese su comentario">
                                            </div>
                                            <div class="col-2">
                                            <input type="hidden" name="id_foto" value="{{$foto->id}}">
                                                <button type="submit" class="btn btn-primary">
                                                    <x-bi-send />
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection