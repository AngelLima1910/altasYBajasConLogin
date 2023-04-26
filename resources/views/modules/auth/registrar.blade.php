@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <h2>Agregar usuario nuevo</h2>
            <div class="col">
                <form action="{{ route('usuarioNuevo') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="">Usuario</label>
                    <input type="text" name="name" class="form-control" required>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <button class="btn btn-outline-primary mt-3">
                        Registrar
                    </button>
                    <a href="{{ route('auth-login') }}" class="btn btn-outline-secondary mt-3">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>    
@endsection