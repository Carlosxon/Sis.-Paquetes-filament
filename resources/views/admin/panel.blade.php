@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Panel de Administración</h2>
    
    @if(Auth::user()->hasRole('cliente'))
        <h3>Mis Envíos</h3>
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
    @else
        <p>Bienvenido al panel de administración.</p>
        <!-- Aquí puedes mostrar otras secciones para administradores -->
    @endif
</div>
@endsection
