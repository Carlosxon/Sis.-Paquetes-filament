@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mis Envíos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Número de Seguimiento</th>
                <th>Estado</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shipments as $shipment)
            <tr>
                <td>{{ $shipment->tracking_number }}</td>
                <td>{{ $shipment->status }}</td>
                <td>{{ $shipment->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
