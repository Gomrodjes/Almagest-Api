@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Albaranes</h1>
    <table class="table table-striped table-hover shadow-sm bg-white rounded">
        <thead class="table-primary">
            <tr>
                <th>Número de pedido</th>
                <th>Número de albarán</th>
                <th>Fecha de emisión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deliveryNotes as $note)
            <tr>
                <td>{{ $note->order->num ?? 'Sin pedido' }}</td>
                <td>{{ $note->num }}</td>
                <td>{{ $note->issuedate }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
