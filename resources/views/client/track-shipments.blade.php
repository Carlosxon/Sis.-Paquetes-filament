@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rastrea tu Envío</h1>
    
    <form method="GET" action="{{ route('client.track') }}">
        <div class="form-group">
            <label for="tracking_number">Número de Seguimiento</label>
            <input type="text" class="form-control" id="tracking_number" name="tracking_number" placeholder="Introduce el número de seguimiento">
        </div>
        <button type="submit" class="btn btn-primary">Rastrear</button>
    </form>

    @if(isset($shipment))
    <div class="card mt-4">
        <div class="card-header">
            Información del Envío
        </div>
        <div class="card-body">
            <h5>Número de Seguimiento: {{ $shipment->tracking_number }}</h5>
            <p>Estado: {{ $shipment->status }}</p>
            <p>Última Actualización: {{ $shipment->updated_at }}</p>
        </div>
    </div>
    @endif
</div>
@endsection
