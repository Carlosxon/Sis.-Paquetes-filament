<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paquete</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @include('partials.floating-footer')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background: url('MiniStore/imagenes/paquetes2.png') no-repeat center center fixed; 
            background-size: cover;
        }
        .container {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 30px;
            overflow: auto; /* Permitir desplazamiento */
            max-height: 80vh; /* Limitar la altura del contenedor */
        }
        .card {
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #ff7f50; 
        }
        .alert {
            border-radius: 5px;
        }
        h2 {
            color: #ff7f50; 
            margin-bottom: 20px;
            font-weight: 500;
        }
        .btn-volver {
            background-color: #ff7f50; 
            border-color: #ff7f50; 
            margin-top: 20px; 
        }
        .btn-volver:hover {
            background-color: #e67e22; 
            border-color: #e67e22; 
        }
        .info-section {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .info-section p {
            margin: 0;
            font-size: 1.1rem;
        }
        .info-label {
            font-weight: 500;
            color: #495057;
        }
        .timeline {
            list-style: none;
            padding: 0;
            position: relative;
        }
        .timeline-item {
            margin: 20px 0;
            position: relative;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            height: 100%;
            border-left: 2px solid #ff7f50; 
            z-index: 1;
        }
        .timeline-content {
            position: relative;
            background: #fff;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 45%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
        .timeline-content h5 {
            margin: 0;
            color: #ff7f50; 
        }
        .timeline-icon {
            font-size: 24px;
            color: #ff7f50; /* Color del icono */
            margin-right: 10px; /* Espacio entre el icono y el texto */
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-volver">Volver</a>
        <h2>Detalles del Paquete</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(isset($qrCodePath))
            <img src="{{ asset($qrCodePath) }}" alt="Código QR" class="img-fluid" />
        @endif

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Código DHL: {{ $envio->codigo_dhl }}</h5>
                <p><span class="info-label">Paquete:</span> {{ $envio->paquete->descripcion }}</p>
                <p><span class="info-label">Sucursal:</span> {{ $envio->sucursal->nombre }}</p>
                <p><span class="info-label">Cliente:</span> {{ $envio->cliente->nombre }}</p>
                <p><span class="info-label">Repartidor:</span> {{ $envio->repartidor->nombre }}</p>
                <p><span class="info-label">Método de Pago:</span> {{ $envio->metodoPago->nombre }}</p>
                <p><span class="info-label">Tipo de Envío:</span> {{ $envio->tipoEnvio->nombre }}</p>
                <p><span class="info-label">Camión/Panel:</span> {{ $envio->camion->modelo }}</p>
                <p><span class="info-label">Camión/Panel:</span> {{ $envio->camion->placa }}</p>
                <p><span class="info-label">Fecha de Envío:</span> {{ \Carbon\Carbon::parse($envio->fecha_envio)->format('d/m/Y') }}</p>
                <p><span class="info-label">Estado:</span> {{ $envio->estado }}</p>
                <p><span class="info-label">Costo Total:</span> Q{{ $envio->costo_total }}</p>
            </div>
        </div>

        <div class="info-section">
            <h2>Estado del Paquete</h2>
            <ul class="timeline">
                <li class="timeline-item">
                    <div class="timeline-content">
                        <i class="fas fa-clock timeline-icon"></i>
                        <h5>Pendiente de Recolectar</h5>
                        <p>{{ $envio->pendiente }}</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-content">
                        <i class="fas fa-check-circle timeline-icon"></i>
                        <h5>Recolectado</h5>
                        <p>{{ $envio->recolectado?? 'estado no disponible' }}</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-content">
                        <i class="fas fa-box timeline-icon"></i>
                        <h5>Almacenado</h5>
                        <p>{{ $envio->bodega ?? 'Estado no disponible' }}</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-content">
                        <i class="fas fa-truck timeline-icon"></i>
                        <h5>En Ruta</h5>
                        <p>{{ $envio->en_transito ?? 'estado no disponible' }}</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-content">
                        <i class="fas fa-gift timeline-icon"></i>
                        <h5>Entregado</h5>
                        <p>{{ $envio->entregado ?? 'Fecha no disponible' }}</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="info-section">
            <h2>Información del Remitente</h2>
            <p><span class="info-label">Nombre:</span> {{ $envio->remitente_nombre }}</p>
            <p><span class="info-label">Dirección:</span> {{ $envio->remitente_direccion }}</p>
            <p><span class="info-label">Teléfono:</span> {{ $envio->remitente_telefono }}</p>
            <p><span class="info-label">Departamento:</span> {{ $envio->remitente_departamento }}</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
