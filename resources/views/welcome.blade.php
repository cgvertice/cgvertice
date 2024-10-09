<html lang="es">

<head>
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    @include('sistema.CGV.includes.NewNavbar')
    @include('sistema.CGV.includes.boton')

    <div class="containerTitulo">
        <h4 class="TituloNavServicios titulo-con-animacion" id="tituloServicio">
            ¿Buscas un Servicio?
            <i class="fas fa-hand-pointer mano-clic"></i> <!-- Mano haciendo clic -->
        </h4>
    </div>

    

    <section class="navbarServicios" id="contenidoServicios">
        <div class="parrafoServicios">
            <p>En GC-Vertice nos importa tu tiempo, por eso diseñamos este espacio para que ubiques de manera agil el
                servicio que estas buscando, navegando a la seccion sevicios y buscando el sub-grupo que contiene el la
                informacion del servicio de tu interes <strong>!Bienvenido!</strong>
            </p>
        </div>

        <div class="row">
            <div class="col subTituloServicios">
                <p>Gestión de calidad de su empresa</p>
                <ul class="topic">
                    <li>Nomar ISO</li>
                    <li>Normas Tecticas Colombianas</li>
                    <li>Normas Tecnicas Sectoriales</li>
                </ul>
            </div>
            <div class="col subTituloServicios">
                <p>Gestión de desarrollo empresarial</p>
                <ul class="topic">
                    <li>Reglamento Interno de Trabajo</li>
                    <li>Vinculación</li>
                    <li>Diseño de Estructura Interna</li>
                    <li>Manual de Funciones</li>
                    <li>PMIRS</li>
                    <li>Riesgo Psicosocial</li>
                    <li>Tratamiento de Datos</li>
                    <li>Planes de Emergencia</li>
                </ul>
            </div>
            <div class="col subTituloServicios">
                <p>IPS Gerencial</p>
                <ul class="topic">
                    <li>SST</li>
                    <li>Administración asistida</li>
                    <li>Consultoria en Gestion RRHH</li>
                </ul>
            </div>
            <div class="col subTituloServicios">
                <p>Formación a la medida</p>
                <ul class="topic">
                    <li>Talleres Integracionales</li>
                    <li>Talleres Experimentales Disruptivos</li>
                </ul>
            </div>
        </div>

    </section>

    <div class="container-fluid">
        <section>
            {{-- PrimerContenedor (Buscar tal cual en el css) --}}
            <div class="content">
                <div class="container">
                    <div class="MainTittle">
                        <img src={{ asset('/img/Slogan.png') }} alt="Imagn" width="auto" height="450px"
                            class="img-fluid" />
                    </div>
                </div>
                <div class="mt-5 mb-4 zoom-effect ImgMain">
                    <img src={{ asset('/img/DD.jpg') }} class="rounded-circle img-fluid shadow-1-strong" alt="Imagn"
                        width="800px" height="600px" />
                </div>
            </div>
            <div class="TextoInicio">
                <p>
                    En Vértice, nos enfocamos en ofrecer soluciones que alivian las preocupaciones diarias de
                    quienes lideran empresas, propiedades horizontales, instituciones educativas y demás
                    organizaciones. Desde el asesoramiento estratégico hasta servicios especializados, nos
                    dedicamos a crear un entorno seguro y confiable. Tu tranquilidad y bienestar son nuestra
                    prioridad, porque sabemos que cuando lo que
                    te importa está protegido, puedes alcanzar tu máximo potencial con confianza y serenidad.
                </p>
            </div>
        </section>
    </div>

    <br><br>
    @include('sistema.CGV.includes.sliderGrandClientes')


    <section class="section-about-video">
        <div class="container col-xxl-12 ">
            <div class="row flex-lg-row-reverse">
                <div class="col-12 col-sm-12 col-lg-9 align-items-center">
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="100%" src={{ asset('/videos/VideoInicio.mp4') }}
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-lg-3">
                    <br>
                    <p><i class="fas fa-trophy"></i> Líderes</p>
                    <hr>
                    <p><i class="fas fa-check-circle"></i> Validación de Procesos</p>
                    <p><i class="fas fa-exclamation-triangle"></i> Gestión de Riesgos</p>
                    <p><i class="fas fa-cogs"></i> Técnicas de Trabajo</p>
                    <hr>
                    <p><i class="fas fa-exchange-alt"></i> Cambio Organizacional</p>
                    <p><i class="fas fa-users"></i> Características y Capacidades</p>
                    <p><i class="fas fa-chart-line"></i> Desarrollo Empresarial</p>
                    <hr>
                    <p><i class="fas fa-building"></i> Empresa Especializada</p>
                    <p><i class="fas fa-handshake"></i> Compromiso</p>
                    <p><i class="fas fa-award"></i> Excelencia Empresarial</p>
                    <hr>
                    <p><i class="fas fa-users"></i> Quiénes Somos</p>
                </div>
            </div>
        </div>
    </section>



    @include('sistema.CGV.includes.serviciosTeaser')

    <br><br>

    @include('sistema.CGV.includes.sliderProductos')

    <br><br>

    @include('sistema.CGV.includes.noticiasBlogCartasSticky')


    <br><br>

    @include('sistema.CGV.includes.mapa')

    @include('sistema.CGV.includes.regresarArriba')

    <br>

    @include('sistema.CGV.includes.sliderGrandAliados')
    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')

    <script>
        const tituloServicio = document.getElementById('tituloServicio');
        const contenidoServicio = document.getElementById('contenidoServicios');
    
        // Añadimos el evento de click al elemento h4
        tituloServicio.addEventListener('click', function() {
            // Verificamos el estado actual de visibilidad y lo alternamos
            if (contenidoServicio.style.display === 'none' || contenidoServicio.style.display === '') {
                contenidoServicio.style.display = 'block'; 
            } else {
                contenidoServicio.style.display = 'none'; 
            }
        });
    </script>




</body>

</html>
