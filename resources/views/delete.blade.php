@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    El registro a eliminar es
                    <ul>
                        <li>El tipo es: {{$items->tipo}}</li>
                        <li>La categoria es: {{$items->categoria}}</li>
                        <li>La cantidad es: {{$items->cantidad}}</li>
                        <li>La descripcion es: {{$items->descripcion}}</li>
                        <li>La fecha es: {{$items->fecha}}</li>
                    </ul>
                    <form action="{{route('destroy', $items->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/" class="btn btn-outline-secondary mt-3">Regresar</a>
                        <button class="btn btn-outline-danger mt-3">Eliminar</button>
                    </form>
                </h2>
            </div>
        </div>
    </div>
@endsection