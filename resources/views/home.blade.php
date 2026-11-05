@extends('layout.main')

@section('titulo')
    Restaurante - Inicio
@endsection

@section('contenido')
    <div class="container">
        <div class="card-body d-flex flex-column flex-md-row align-items-center gap-3"> 
            <div>
                <h1 class="card-title fw-bold">Avelos</h1>
                <p class="card-text fw-semibold">
                    Ingredientes puros cultivado a menos de 40 kilometros por agricultorres locales,<br>
                     para que disfrutes de la mejor calidad y frescura en cada bocado.
                </p>
                <a href="#" class="btn btn-primary">Ordenar ahora</a>
            </div>
             <img src="/imagenes/Platillo1.png" class="img-fluid my-3" style="max-width: 250px;" alt="Platillo 1">
        </div>
    </div>
@endsection
