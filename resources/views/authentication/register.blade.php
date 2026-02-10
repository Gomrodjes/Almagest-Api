@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <form method="POST" action="/register" class="p-4 bg-white rounded shadow" style="width:400px;">
        @csrf
        <h1 class="text-center mb-4">Registro</h1>

        <label>Nombre</label>
        <input type="text" name="firstname" class="form-control mb-3" required>

        <label>Apellido</label>
        <input type="text" name="secondname" class="form-control mb-3" required>

        <label>Email</label>
        <input type="email" name="email" class="form-control mb-3" required>

        <label>Contraseña</label>
        <input type="password" name="password" class="form-control mb-3" required>

        <label>Confirmar contraseña</label>
        <input type="password" name="password_confirmation" class="form-control mb-3" required>

        <button type="submit" class="btn btn-success w-100">Registrar</button>
    </form>
</div>
@endsection
