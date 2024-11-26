@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Envíos</h1>

    @if ($envios->isEmpty())
        <p>No tienes ningún envío registrado.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destinatario</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($envios as $envio)
                    <tr>
                        <td>{{ $envio->id }}</td>
                        <td>{{ $envio->destinatario }}</td>
                        <td>{{ $envio->direccion }}</td>
                        <td>{{ $envio->estado }}</td>
                        <td>{{ $envio->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

