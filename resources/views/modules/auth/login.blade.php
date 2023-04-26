@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Login de usuario</h3>
                <form action="{{ route('logear') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" name="name" required>
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <button class="btn btn-outline-primary mt-3">Entrar</button>
                    <a href="{{ route('registrar') }}" class="btn btn-outline-info mt-3">Registrar</a>
                </form>
            </div>
        </div>
    </div>
@endsection