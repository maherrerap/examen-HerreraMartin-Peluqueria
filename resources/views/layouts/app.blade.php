<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Estilistas: Nuevo Look')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- HEADER -->
<div class="container-fluid px-4">
    <div class="d-flex align-items-center gap-4">
        <a href="{{ route('citas.index') }}" class="d-flex align-items-center">
            Estilistas Nuevo Look
        </a>
    </div>
</div>



<div class="container my-4">
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @yield('contenido')
</div>


<!-- FOOTER -->
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <p id="texto_footer">
                © 2025 Estilistas Nuevo Look Inc. | Todos los Derechos Reservados
            </p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
