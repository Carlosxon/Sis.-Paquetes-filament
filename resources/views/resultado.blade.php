<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Rastreo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @include('partials.floating-footer')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f8fc;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .card-header {
            background-color: #ff5722;
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            text-align: center;
            font-size: 1.5rem;
        }
        .card-body {
            padding: 30px;
        }
        .detail-icon {
            font-size: 1.3rem;
            color: #ff5722;
            margin-right: 10px;
        }
        .detail-label {
            font-weight: bold;
            font-size: 1.1rem;
        }
        .btn-back {
            background-color: #ff5722;
            color: #fff;
            border-radius: 25px;
            padding: 10px 30px;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

@if(isset($qrCodePath))
    <img src="{{ asset($qrCodePath) }}" alt="Código QR" class="img-fluid" />
@endif
    <div class="container mt-5">
        @if(isset($envio))
            <div class="card mx-auto" style="max-width: 600px;">
                <div class="card-header">
                    Detalles del Envío
                </div>
                <div class="card-body">
                    <p><i class="fas fa-barcode detail-icon"></i> <span class="detail-label">Número de Seguimiento:</span> {{ $envio->numero_seguimiento }}</p>
                    <p><i class="fas fa-truck detail-icon"></i> <span class="detail-label">Estado:</span> {{ $envio->estado }}</p>
                    <p><i class="fas fa-calendar-alt detail-icon"></i> <span class="detail-label">Fecha de Envío:</span> {{ $envio->fecha_envio }}</p>
                    <p><i class="fas fa-map-marker-alt detail-icon"></i> <span class="detail-label">Dirección de Envío:</span> {{ $envio->direccion_envio }}</p>
                </div>
            </div>
        @else
            <div class="card mx-auto" style="max-width: 600px;">
                <div class="card-header">
                    Estado del Envío
                </div>
                <div class="card-body text-center">
                    <h5>{{ $mensaje }}</h5>
                </div>
            </div>
        @endif
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-back">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>
