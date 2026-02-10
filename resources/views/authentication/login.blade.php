@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <form method="POST" action="/login" class="p-4 bg-white rounded shadow" style="width:350px;">
        @csrf
        <h1 class="text-center mb-4">Login</h1>

        <label>Email</label>
        <input type="email" name="email" class="form-control mb-3" required>

        <label>Password</label>
        <input type="password" name="password" class="form-control mb-3" required>

        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
    </form>
</div>
@endsection
