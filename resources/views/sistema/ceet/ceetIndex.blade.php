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

    <main class="ContentCeet">
        <div class="p-2  rounded bg-body-secondary">
            <div class="text-center">
                <img src={{ asset('../img/ceet.png') }} alt="Logotipo Ceet" class="img-fluid" style="height: 180px" />
            </div>
            <div class="text-center">
                <h2 style="color:#b8860b">¡Bienvenidos a Ceet! <br> Centro Especializado en Educación para el Trabajo
                </h2>
                <p class="my-3">
                    Nos especializamos en ofrecer cursos y capacitaciones que aseguran el cumplimiento de normativas en
                    Seguridad y Salud en el Trabajo (SST), Plan de Manejo Integral de Residuos Sólidos (PMIRS) y otros
                    temas esenciales para Empresas, Instituciones Educativas, Propiedades Horizontales y más. Nuestra
                    misión es ayudarte a mantenerte al día con las regulaciones, asegurando un entorno seguro y
                    sostenible. ¡Juntos construimos un futuro más responsable!
                </p>
            </div>
            <div class="BTNceet">   
                <a href="https://ceet.cgvertice.com" target="_blank" rel="noopener noreferrer"
                    class="btn btn-warning btn-lg" type="button">¡Presiona aquí!</a>
            </div>
        </div>
        

        @include('sistema.CGV.includes.card')

        <div class="BTNceet">
            <p class="card-text">¿Quieres tener la oportunidad de inscribirte a nuestros cursos y expandir tus
                conocimientos?
            </p>
        </div>
        <div>
            <div class="BTNceet">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" onclick="window.open('https://forms.gle/8SMLABK5Gm1775QC8', '_blank')">
                    ¡Inscríbete!
                </button>
            </div>     
    </main>

    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')

    <script src={{ asset('../js/color-modes.js') }}></script>
</body>
<script>
    function sendToWhatsApp() {
        const name = document.getElementById('InputName').value;
        const lastName = document.getElementById('InputLastName').value;
        const email = document.getElementById('InputEmail').value;
        const id = document.getElementById('InputID').value;
    
        const message = `Hola, me interesa matricularme en CEET para sus cursos virtuales. Estos son mis datos:\nNombre: ${name}\nApellido: ${lastName}\nCorreo: ${email}\nID: ${id}`;
        const phoneNumber = '3217462196'; // Reemplaza con el número de teléfono deseado
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    
        window.open(whatsappUrl, '_blank');
    }
    </script>

</html>
