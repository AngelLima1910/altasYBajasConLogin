@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="background-color: green">Ganancias: $ {{number_format($totalGanancias, 2)}}</h1>
            </div>
            <div class="col">
                <h1 style="background-color: red">Gastos: $ {{number_format($totalGastos, 2)}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-outline-primary">Agregar gasto o ganancia</a>
                <a href="{{ route('logout') }}" class="btn btn-outline-danger">Salir</a>
                <table class="table table-sm" id="table">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->tipo}}</td>
                                <td>{{$item->categoria}}</td>
                                <td>${{number_format($item->cantidad, 2) }}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->fecha}}</td>
                                <td>
                                    <a href="{{route('edit', $item->id)}}" class="btn btn-outline-warning">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('show', $item->id)}}" class="btn btn-outline-danger">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection