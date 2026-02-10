@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Facturas</h1>
    <table class="table table-striped table-hover shadow-sm bg-white rounded">
        <thead class="table-primary">
            <tr>
                <th>Número de albarán</th>
                <th>Número de factura</th>
                <th>Fecha de emisión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->deliveryNote->num ?? 'Sin albarán' }}</td>
                <td>{{ $invoice->num }}</td>
                <td>{{ $invoice->issuedate }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
