<!-- resources/views/filament/mispaquetes/show.blade.php -->

@if(isset($mensaje))
    <div class="alert alert-warning">
        {{ $mensaje }}
    </div>


<x-filament::page>
    <h1>Detalles de Mis Paquetes</h1>

    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha de Envío</th>
                <th>Código DHL</th>
                <th>Costo Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($envios as $envio)
                <tr>
                    <td>{{ $envio->paquete->descripcion }}</td>
                    <td>{{ $envio->estado }}</td>
                    <td>{{ $envio->fecha_envio->format('d/m/Y') }}</td>
                    <td>{{ $envio->codigo_dhl }}</td>
                    <td>{{ $envio->costo_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>

