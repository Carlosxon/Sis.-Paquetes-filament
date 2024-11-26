<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código QR del Paquete</title>
</head>
<body>
    <h1>Código QR para el paquete: {{ $paquete->numero_rastreo }}</h1>
    <div>
        {!! $qrCode !!}
    </div>
    <p>Estado actual: {{ $paquete->estado }}</p>
</body>
</html>
