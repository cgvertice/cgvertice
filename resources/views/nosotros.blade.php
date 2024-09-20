<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Group Vértice || Nosotros</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    @include('sistema.CGV.includes.NewNavbar')
    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.regresarArriba')

    {{-- Imagen del Inicio --}}
    <section class="section-about">
        <div class="content-Conózcanos">
            <p class="text-center titulo" id="animated-title">Conózcanos</p>
            <p class="text-center texto" id="animated-text">
                <i id="start-i" class="fas fa-quote-left"></i>
                <span id="typed-text">Quiénes Somos y Nuestra Pasión por la Excelencia Empresarial.</span>
                <i id="start-i" class="fas fa-quote-right"></i>
            </p>
        </div>
    </section>
    {{-- FIn seccion de la imagen --}}

    {{-- inicio Seccion Acrostico --}}
    <section class="Acrostico-section">
        <div class="container">
            <div class="row" style="cursor: default">
                <div class="col-12 text-center mt-5">
                    <h3 class="acrostico">
                        <span class="letter">C O R P O R A T E</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">G R O U P</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">V E R T I C E</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">S.</span>
                        <span class="letter">A.</span>
                        <span class="letter">S.</span>
                    </h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md 1"></div>
                <div class="col-md-7">
                    <p class="acrostico-text" style="cursor: default;">
                        <a class="cgv" title="Validación de procesos">V<a style="color: #636363"> alidación de
                                procesos</a></a>
                        <br>
                        <a class="cgv" title="Empresariales mediante la">E<a style="color: #636363"> mpresariales
                                mediante la</a></a><br>
                        <a class="cgv" title="Retroalimentación y gestión de riesgos que utiliza">R<a
                                style="color: #636363">
                                etroalimentación y gestión
                                de riesgos que utiliza</astyle=></a> <br>
                            <a class="cgv" title="Técnicas de trabajo orientadas a">T<a style="color: #636363">
                                    écnicas de trabajo orientadas
                                    a</a></a>
                            <br>
                            <a class="cgv"
                                title="Inferir en el cambio organizacional, mediante el aprovechamiento de">I<a
                                    style="color: #636363"> nferir en
                                    el cambio organizacional, mediante el aprovechamiento de</a></a> <br>
                            <a class="cgv"
                                title="Características y capacidades individuales que permitan el desarrollo de">C<a
                                    style="color: #636363">
                                    aracterísticas
                                    y capacidades individuales que permitan el desarrollo de</a></a> <br>
                            <a class="cgv" title="Ecosistemas internos empoderados">E<a style="color: #636363">
                                    cosistemas internos
                                    empoderados.</a></a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/LogoAgosto.png') }}" alt="Corporate Group Vertice sas"
                        style="width: 55%; height: auto;">
                </div>
            </div>
        </div>
    </section>
    {{-- Final Seccion Quienes SomosAcrostico --}}

    <br><br><br>

    {{-- inicio CEOS --}}

    {{-- CEOSStyle (Buscar así tal cual en el css) --}}
    <section class="seccion-Ceos container text-center">
        <div class="row">
            <h1 style="color: #b8860b">C E O S</h1>
            <div class="col-md-6">
                <p class="lead font-italic mx-4 mx-md-5">
                    Lina Maria Aristizabal Carvajal <br> <strong style="color: #b8860b"> Gerente </strong>
                </p>
                <div class="imgCEOS" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <img src="img/LINACEO.png" class="rounded-circle" alt="Imagn" width="200"
                        height="200"/>
                        <p style="text-decoration: underline">Gerente y Fundadora Corporate Group
                            Vértice S.A.S, especialista en...</p>
                </div>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <p class="lead font-italic mx-4 mx-md-5">
                                    Lina Maria Aristizabal <br> <strong style="color: #b8860b"> Gerente </strong>
                                </p>
                                <div class="imgCEOSs">
                                    <img src="img/LINACEO.png" class="rounded-circle" alt="Imagn" width="200"
                                        height="200" />
                                    <p class="text-White mb-0" id="Reseña">Gerente y Fundadora Corporate Group
                                        Vértice S.A.S, especialista en
                                        Diseño Curricular para IFTDH e IES, conferencista y especialista en SISTEMAS DE
                                        GESTION.
                                        Se ha desempeñado como directora de IFTDH, Cogestora y Cofundadora de más de 10
                                        Instituciones
                                        de educación para el trabajo y el desarrollo humano a nivel nacional y 7 de
                                        educación Formal.
                                        Y de más de 10 empresas en otros sectores. Ha sido consultora en Gestión y
                                        Desarrollo de las
                                        Organizaciones en más de 70 empresas. Cuenta con experiencia como consultora en
                                        Diseño e
                                        implementación de Sistemas de Gestión de Calidad de Diferentes sectores
                                        empresariales, como
                                        auditora de Sistemas de Gestión Ambientales, Calidad y SST, directora y rectora
                                        de diversas
                                        instituciones educativas, presidenta de la mesa Nacional de Consultoría
                                        Empresarial del SENA,
                                        evaluadora de Normas de competencia laboral y participe activa de otras mesas
                                        como Gestión del
                                        Riesgo, PIMES, BPO-KPO, y educativa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="lead font-italic mx-4 mx-md-5">
                    Diego Alonso Pérez <br> <strong style="color: #b8860b"> Sub Gerente </strong>
                </p>
                <div class="imgCEOS" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <img src="img/CeoD.png" class="rounded-circle" alt="Imagn" width="200"
                        height="200"/>
                        <p style="text-decoration: underline">Gerente y fundador de Hydrobombas S.A.S
                            con Experiencia de 17 años...</p>
                </div>
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <p class="lead font-italic mx-4 mx-md-5">
                                    Diego Alonso Pérez <br> <strong style="color: #b8860b"> Sub Gerente </strong>
                                </p>
                                <div class="imgCEOSs">
                                    <img src="img/CeoD.png" class="rounded-circle" alt="Imagn" width="200"
                                        height="200" />
                                    <p class="text-White mb-0" id="Reseña">Gerente y fundador de Hydrobombas S.A.S
                                        con Experiencia de 17 años en puestos directivos, desde hace 4 años asumió el
                                        rol de subgerente de Corporate Group Vértice. Tecnólogo e ingeniero mecánico de
                                        profesión, con amplios conocimientos en neumática, hidráulica, manejo de
                                        herramientas técnicas y desarrollo de mediciones del campo. Ha recibido y
                                        perfeccionado sus habilidades con entrenamientos en enfermería, espacios
                                        confinados, trabajo en alturas, seguridad vial y manejo de extintores y
                                        protocolos contra incendios. Actualmente cuenta con certificaciones en primeros
                                        auxilios, supervisor de espacios confinados y coordinador de alturas, además de
                                        ser tallerista y conferencista en estas áreas. Su amplia experiencia le ha
                                        permitido especializarse en redes contra incendios RCI y mecanismos de
                                        prevención y control, esta misma trayectoria le ha aportado madurez y solidas
                                        estructuras en la gestión del recurso Humano, llevándolo a considerarse más que
                                        un líder un miembro mas de los equipos de intervención y auto caracterizándose
                                        en tres palabras “Conocimiento, experiencia y humanidad”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- inicio CEOS --}}

    <br>
    <br>
    <br>

    @include('sistema.CGV.includes.tabsQuienessomos')


    

    <br>
    <br>
    <br>

    <section class="Timeline">
        <div class="container py-5">
            <div class="main-timeline-2">
                {{-- Área de servicio al cliente --}}
                <div class="timeline-2 left-2">
                    {{-- CardsNosotros (Buscar así tal cual en el css) --}}
                    <div class="cardNosotros">
                        <img src="img/Servicio-cliente.jpg" class="card-img-top" style="width: 100%; height: auto;"
                            alt="Imagen 1">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">Servicio
                                al cliente</h3>
                            <p class="mb-0">
                                En nuestra empresa, el servicio al cliente es nuestra prioridad número uno. Nos
                                esforzamos por brindar una experiencia excepcional a cada uno de nuestros clientes en
                                cada interacción. Nuestro equipo de atención al cliente está altamente capacitado y
                                dedicado a satisfacer tus necesidades y resolver cualquier pregunta o problema que
                                puedas tener.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Espacio de SST-SG --}}
                <div class="timeline-2 right-2">
                    <div class="cardNosotros">
                        <img src="img/SG-SST.png" class="card-img-top" style="width: 100%; height: auto;"
                            alt="Imagen 2">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">SG-SST
                            </h3>
                            <p class="mb-0">
                                SG - SST se dedica a garantizar la seguridad y el bienestar en el entorno laboral.
                                Nuestra
                                prioridad es proporcionar soluciones efectivas en seguridad y salud en el trabajo.
                                Contamos con un equipo altamente capacitado en normativas y medidas preventivas. Estamos
                                aquí para ayudarte en cualquier aspecto relacionado con la seguridad laboral. ¡Confía en
                                SST-SG para un entorno laboral más seguro y saludable!.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Espacio de multimedia --}}
                <div class="timeline-2 left-2">
                    <div class="cardNosotros">
                        <img src="img/Multimedia.png" class="card-img-top" style="width: 100%; height: auto;"
                            alt="Imagen 3">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">
                                Rescursos</h3>
                            <p class="mb-0">
                                Contamos con una variedad de recursos, incluyendo videos educativos,
                                infografías informativas y testimonios de clientes satisfechos. Estos recursos están
                                diseñados para brindar información relevante y útil sobre SST y servicio al cliente,
                                ayudando a nuestros clientes a comprender mejor estos temas y cómo pueden beneficiar a
                                sus empresas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <div class="gestionD_PU text-center">
        <h2 class="text-black fw-bold">¿Tienes alguna duda o sugerencia?</h2>
        <p class="text-center "><a href="mailto:Soluciones.vertice@gmail.com" class="text-primary fw-bold"><span style="color: #b8860b">Contáctanos</span></a>, o envíanos tu comentario aquí</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSepqsy8LoKLZ46zXR29qGY2mDUH9HL9L7fmahTKbYFIFoT4GQ/viewform?usp=pp_url" class="btn btn-warning mt-2" target="_blank">
            <i class="bi bi-envelope-fill"></i> PQRSF
        </a>
    </div>
    

    <br>
    <br>

    @include('sistema.CGV.includes.mapa')
    @include('sistema.CGV.includes.botonWhatsapp')
    @include('sistema.CGV.includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtener el hash de la URL
        var hash = window.location.hash;

        if (hash) {
            // Encuentra el botón que corresponde a la pestaña
            var tabTriggerEl = document.querySelector('button[data-bs-target="' + hash + '"]');

            // Si existe un botón que corresponde al hash, activa la pestaña
            if (tabTriggerEl) {
                var tab = new bootstrap.Tab(tabTriggerEl);
                tab.show();
            }
        }
    });
</script>


</html>
