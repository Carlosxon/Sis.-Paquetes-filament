<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Rastreo de Paquetes - MiniTrack</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @include('partials.floating-footer')
    <style>
        :root {
            --primary-color: #ff5722;
            --primary-dark: #e64a19;
            --primary-light: #ffab91;
            --secondary-color: #fbe9e7;
        }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { background-color: var(--primary-color); }
        .navbar-brand, .nav-link { color: #ffffff !important; }
        .nav-link:hover { color: var(--secondary-color) !important; }
        .btn-primary { background-color: var(--primary-color); border-color: var(--primary-color); }
        .btn-primary:hover { background-color: var(--primary-dark); border-color: var(--primary-dark); }
        .carousel-item { height: 65vh; min-height: 300px; background: no-repeat center center scroll; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }
        .service-icon { font-size: 4rem; color: var(--primary-color); }
        .card { border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .card:hover { box-shadow: 0 6px 12px rgba(0,0,0,0.15); transition: box-shadow 0.3s ease-in-out; }
        .bg-light { background-color: var(--secondary-color) !important; }
        footer { background-color: var(--primary-dark); color: white; }
    </style>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MiniTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            <i class="fas fa-cogs"></i> Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#track">
                            <i class="fas fa-truck"></i> Rastrear
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <i class="fas fa-envelope"></i> Contacto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#register">
                            <i class="fas fa-user-plus"></i> Registro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/login">
                            <i class="fas fa-user"></i> Login
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Primer elemento del carrusel -->
        <div class="carousel-item active" style="background-image: url('MiniStore/imagenes/camion.png'); background-size: cover; background-position: center;">
            <div class="carousel-caption">
                <h3>Entrega Rápida y Segura</h3>
                <p>Confía en nosotros para entregar tus paquetes a tiempo.</p>
            </div>
        </div>
        <!-- Segundo elemento del carrusel -->
        <div class="carousel-item" style="background-image: url('MiniStore/imagenes/paquetes2.png'); background-size: cover; background-position: center;">
            <div class="carousel-caption">
                <h3>Rastreo en Tiempo Real</h3>
                <p>Sigue tus envíos en cada paso del camino.</p>
            </div>
        </div>
        <!-- Agrega más elementos si es necesario -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>


    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-truck service-icon mb-3"></i>
                            <h4 class="card-title">Envío Nacional</h4>
                            <p class="card-text">Entregamos en todo el país de manera rápida y segura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-globe service-icon mb-3"></i>
                            <h4 class="card-title">Envío Internacional</h4>
                            <p class="card-text">Lleva tus paquetes a cualquier parte del mundo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-box service-icon mb-3"></i>
                            <h4 class="card-title">Embalaje Especial</h4>
                            <p class="card-text">Ofrecemos embalaje especializado para artículos frágiles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section class="py-5 bg-light" id="track">
    <div class="container">
        <h2 class="text-center mb-5">Rastrear tu Paquete</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('buscar.envio') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="numero_seguimiento" placeholder="Ingresa tu número de rastreo" aria-label="Número de rastreo" required>
                        <button class="btn btn-primary" type="submit">Rastrear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

  <!-- Sección de Registro -->
<section class="py-5 bg-light" id="register">
    <div class="container">
        <h2 class="text-center mb-5">Registro</h2>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form action="{{ route('registro.cliente') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="contraseña_confirmation" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>¿Ya tienes una cuenta? <a href="/admin">Inicia sesión aquí</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <p class="m-0 text-center"> MiniTrack 2024</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function redirectToAdmin(event) {
            event.preventDefault(); // Evita el envío del formulario
            // Aquí puedes agregar la lógica para registrar al usuario
            // Luego redirigir a la página de administración
            window.location.href = '/admin'; // Cambia '/admin' a la ruta que desees
        }
    </script>
</body>
</html>
