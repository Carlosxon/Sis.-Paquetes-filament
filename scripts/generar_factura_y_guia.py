import qrcode
from reportlab.lib.pagesizes import letter
from reportlab.pdfgen import canvas

def generar_codigo_qr(url, filename):
    qr = qrcode.QRCode(version=1, box_size=10, border=5)
    qr.add_data(url)
    qr.make(fit=True)
    img = qr.make_image(fill='black', back_color='white')
    img.save(filename)

def crear_factura_y_guia(nombre_receptor, nit, direccion, fecha, numero_factura, items, total, qr_filename):
    # Generar el código QR
    generar_codigo_qr("https://www.dhl.com", qr_filename)

    # Crear PDF
    c = canvas.Canvas("factura_y_guia.pdf", pagesize=letter)
    width, height = letter

    # Factura
    c.drawString(100, height - 50, "FACTURA")
    c.drawString(100, height - 70, f"Nombre del Receptor: {nombre_receptor}")
    c.drawString(100, height - 90, f"NIT: {nit}")
    c.drawString(100, height - 110, f"Dirección: {direccion}")
    c.drawString(100, height - 130, f"Fecha: {fecha}")
    c.drawString(100, height - 150, f"Número de Factura: {numero_factura}")

    # Detalle de la factura
    c.drawString(100, height - 180, "#   | Descripción         | Cantidad | Precio Unitario | Total")
    y = height - 200
    for i, item in enumerate(items):
        c.drawString(100, y, f"{i + 1}   | {item['descripcion']} | {item['cantidad']} | {item['precio']} | {item['total']}")
        y -= 20

    c.drawString(100, y, f"TOTAL: {total}")
    c.drawImage(qr_filename, 400, height - 200, width=100, height=100)

    # Guía de Envío
    y -= 50
    c.drawString(100, y, "GUIA DE ENVIO")
    y -= 20
    c.drawString(100, y, f"Remitente: {nombre_receptor}")
    c.drawString(100, y - 20, f"Dirección: {direccion}")
    c.drawString(100, y - 40, "Descripción del Envío: [Descripción del paquete]")
    c.drawString(100, y - 60, "Número de Piezas: [Número de piezas]")
    c.drawString(100, y - 80, "Peso: [Peso del paquete]")
    c.drawString(100, y - 100, "Valor Declarado: [Valor del paquete]")
    c.drawImage(qr_filename, 400, y - 200, width=100, height=100)

    c.save()

# Datos de ejemplo
nombre_receptor = "Carlos Salvador"
nit = "123456789"
direccion = "14 CALLE 6-36 ZONA II, COL. MARISCAL, GUATEMALA"
fecha = "2023-10-11"
numero_factura = "001"
items = [
    {"descripcion": "Bitácora IP: 12 Pro", "cantidad": 1, "precio": 250.00, "total": 250.00},
    {"descripcion": "Tapa IP: 12 Pro", "cantidad": 1, "precio": 75.00, "total": 75.00},
]
total = 325.00
qr_filename = "codigo_qr.png"

# Crear factura y guía
crear_factura_y_guia(nombre_receptor, nit, direccion, fecha, numero_factura, items, total, qr_filename)