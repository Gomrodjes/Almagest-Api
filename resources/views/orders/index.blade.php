@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Pedidos</h1>
    <table class="table table-striped table-hover shadow-sm bg-white rounded">
        <thead class="table-primary">
            <tr>
                <th>Número de pedido</th>
                <th>Fecha del pedido</th>
                <th>Empresa de origen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->num }}</td>
                <td>{{ $order->issuedate }}</td>
                <td>{{ $order->company->name ?? 'Sin empresa' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
