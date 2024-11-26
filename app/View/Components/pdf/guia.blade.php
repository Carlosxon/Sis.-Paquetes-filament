<!DOCTYPE html>
<html>
<head>
    <title>Guía de Envío</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 100%; max-width: 800px; margin: auto; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Guía de Envío</h1>
            <p>Código DHL: {{ $envio->codigo_dhl }}</p>
        </div>
        <div class="details">
            <p><strong>Paquete:</strong> {{ $envio->paquete->descripcion }}</p>
            <p><strong>Sucursal:</strong> {{ $envio->sucursal->nombre }}</p>
            <p><strong>Cliente:</strong> {{ $envio->cliente->nombre }}</p>
            <p><strong>Repartidor:</strong> {{ $envio->repartidor->nombre }}</p>
            <p><strong>Método de Pago:</strong> {{ $envio->metodoPago->nombre }}</p>
            <p><strong>Tipo de Envío:</strong> {{ $envio->tipoEnvio->nombre }}</p>
            <p><strong>Camión/Panel:</strong> {{ $envio->camion->descripcion }}</p>
            <p><strong>Fecha de Envío:</strong> {{ $envio->fecha_envio->format('d/m/Y') }}</p>
            <p><strong>Estado:</strong> {{ $envio->estado }}</p>
        </div>
        <div class="qr-code">
            <h2>Código QR</h2>
            <img src="{{ asset('qrcodes/' . $envio->codigo_dhl . '.png') }}" alt="Código QR">
        </div>
    </div>
</body>
</html>
