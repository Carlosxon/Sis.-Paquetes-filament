@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Envío</h1>

    <p>Número de Seguimiento: {{ $shipment->tracking_number }}</p>
    <p>Estado: {{ $shipment->status }}</p>
    <p>Fecha de Envío: {{ $shipment->created_at->format('d/m/Y') }}</p>
    <!-- Agrega más detalles según sea necesario -->
</div>
@endsection