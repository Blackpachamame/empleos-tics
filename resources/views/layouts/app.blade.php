<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleos Tics</title>

    <!-- Custom CSS -->
    <!-- @section('styles_laravel') -->

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assest/css/app.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @show

    <!-- @yield('mis_estilos') -->
</head>

<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-dark colorCab shadow">
        <div class="container-fluid">
            <span class="navbar-brand ms-2 mb-0 fst-italic h1">EmpleosTics</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Lista de rubros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mostrar búsquedas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inscripción de un postulante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mostrar las inscripciones</a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- <div class="container-fluid"> -->
    <section class="pt-3 pt-md-5 flex-shrink-0">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Aquí incluiremos el contenido de nuestra aplicación -->
                @yield('content')

            </div>
        </div>
    </section>
    <!-- </div> -->
    <footer class="footer mt-auto pt-4 pb-2 colorFooter">
        <div class="container">
            <p class="float-end">
                <a href="#">Volver arriba</a>
            </p>
            <p>Yo te conozco <a href="https://getbootstrap.com/">Lara Vel</a> by <a href="#">The Condicionales</a>.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>

</html>