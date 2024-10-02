<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro Especializado en Educacion para el Trabajo || Ceet</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/ceet.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    @include('sistema.CGV.includes.NewNavbar')
    <br>
    <br>

    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.regresarArriba')

    <main class="container">
        <div class="p-4 rounded bg-body-secondary" style="display: flex; flex-direction:column; ">
            <div class="col-lg-12 text-center">
                <img src={{ asset('../img/ceet.png') }} alt="Logotipo Ceet" class="img-fluid" style="height: 350px" />
            </div>
            <div class="col-lg-12 text-center">
                <h1 class="display-4" style="color:#b8860b">¡Bienvenidos a Ceet - Centro Especializado en Educación para el Trabajo!</h1>
                <p class="my-3">
                    Nos especializamos en ofrecer cursos y capacitaciones que aseguran el cumplimiento de normativas en Seguridad y Salud en el Trabajo (SST), Plan de Manejo Integral de Residuos Sólidos (PMIRS) y otros temas esenciales para Empresas, Instituciones Educativas, Propiedades Horizontales y más. Nuestra misión es ayudarte a mantenerte al día con las regulaciones, asegurando un entorno seguro y sostenible. ¡Juntos construimos un futuro más responsable!
                </p>
            </div>
        </div>
    </main>

    


    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')

    <script src={{ asset('../js/color-modes.js') }}></script>
</body>
</html>