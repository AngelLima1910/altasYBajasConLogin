@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Editar registro</h2>
                <form action="{{route('update', $items->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="tipo">Tipo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipo" id="tipo" value="Ganancia">
                        <label class="form-check-label" for="tipo-ganancia">Ganancias</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipo" id="tipo" value="Gasto">
                        <label class="form-check-label" for="tipo-gasto">Gastos</label>
                    </div>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-control" required>
                        <option value="{{$items->categoria}}" selected disabled>{{$items->categoria}}</option>
                        <option value="Gasto Personal">Gasto Personal</option>
                        <option value="Imprevisto">Imprevisto</option>
                        <option value="Gasto hormiga">Gasto hormiga</option>
                        <option value="Impuestos">Impuestos</option>
                        <option value="Servicios">Servicios</option>
                        <option value="Desarrollo web">Desarrollo web</option>
                        <option value="Deposito">Deposito</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control" required value="{{$items->cantidad}}">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required value="{{$items->descripcion}}">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$items->fecha}}">
                    <button class="btn btn-outline-warning mt-3">
                        Actualizar
                    </button>
                    <a href="/" class="btn btn-outline-secondary mt-3">
                        Regresar
                    </a>
                </form>
                
            </div>
        </div>
    </div>
@endsection