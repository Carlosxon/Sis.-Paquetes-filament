@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido, {{ auth()->user()->name }}</h1>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Resumen de Envíos
                </div>
                <div class="card-body">
                    <p>Tienes un total de {{ $totalShipments }} envíos.</p>
                    <p>Último envío: {{ $lastShipment->tracking_number ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
