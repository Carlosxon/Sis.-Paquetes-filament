<!DOCTYPE html>
<html>
<head>
    <title>Guía</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
            margin: 0; 
            padding: 20px; 
        }
        .header, .footer { 
            text-align: center; 
            background-color: #ddd; 
            color: white; 
            padding: 10px 0; 
        }
        .content { 
            margin: 20px; 
            background: white; 
            padding: 20px; 
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }
        th { 
            background-color: #007BFF; 
            color: white; 
        }
        .section { 
            margin-bottom: 40px; 
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- Guía de Envío -->
    <div class="section">
        <div class="header">
            <h1>Guía de Envío</h1>
            <p>Número de Guía: {{ $envio->codigo_dhl }}</p>
        </div>
        <div class="content">
            <h3>Datos del Remitente</h3>
            <p><strong>Nombre:</strong> {{ $envio->remitente_nombre }}</p>
            <p><strong>Dirección:</strong> {{ $envio->remitente_direccion }}</p>
            <p><strong>NIT:</strong> {{ $envio->remitente_nit }}</p>
            <h3>Datos del Destinatario</h3>
            <p><strong>Nombre:</strong> {{ $envio->destinatario_nombre }}</p>
            <p><strong>Dirección:</strong> {{ $envio->destinatario_direccion }}</p>
            <p><strong>Teléfono:</strong> {{ $envio->destinatario_telefono }}</p>
            <p><strong>NIT:</strong> {{ $envio->destinatario_nit }}</p>
            <h3>Detalles del Envío</h3>
            <p><strong>Peso:</strong> {{ $envio->peso }} libras</p>
            <p><strong>Costo Total:</strong> Q{{ $envio->costo_total }}</p>

            <!-- Mostrar el código QR -->
            <h3>Código QR para Rastreo</h3>
            @if (file_exists(public_path('qrcodes/' . $envio->codigo_dhl . '.png')))
                <img src="{{ asset('qrcodes/' . $envio->codigo_dhl . '.png') }}" alt="Código QR" style="width: 150px; height: 150px;">
            @else
                <img src="/imagenes/qr.png" alt="Código QR" style="width: 150px; height: 150px;">
            @endif
        </div>
        <div class="footer">
            <p>Fecha de Envío: {{ $envio->fecha_envio }}</p>
        </div>
    </div>
    @if (session('error'))
        <div style="color: red; font-weight: bold;">
            {{ session('error') }}
        </div>
    @endif
</body>
</html>
