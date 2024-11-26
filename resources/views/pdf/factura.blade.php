<!DOCTYPE html>
<html>
<head>
    <title>Factura</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header, .footer { text-align: center; }
        .content { margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        .section { margin-bottom: 40px; }
    </style>
</head>
<body>
   

    <!-- Factura -->
    <div class="section">
        <div class="header">
            <h1>Factura</h1>
            <p>Número de Autorización: {{ $factura->numero_autorizacion }}</p>
        </div>
        <div class="content">
            <h3>Datos del Receptor</h3>
            <p><strong>Nombre:</strong> {{ $factura->nombre_receptor }}</p>
            <p><strong>NIT:</strong> {{ $factura->nit_receptor }}</p>
            
            <h3>Detalles de la Factura</h3>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($factura->items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>Q{{ $item->precio_unitario }}</td>
                        <td>Q{{ $item->total }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><strong>Total:</strong> Q{{ $factura->total }}</p>
        </div>
        <div class="footer">
            <p>Fecha de Emisión: {{ $factura->fecha_emision }}</p>
        </div>
    </div>
</body>
</html>
