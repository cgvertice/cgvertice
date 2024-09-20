<div class="container py-1">
    <hr>
</div>
<div style="padding: 2% 0% 0% 5%; color:#b8860b;">
    <h2>Nuestros Servicios más déstacados</h2>
</div>
<section class="contenedorst body">
    {{-- CardServiciosTeaser (Buscar asi tal cual en el css) --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/Inicio-destacados-sst.jpg') }} alt="Educación y Formación.png">
                    <h5 class="text-center">Seguridad y salud en el trabajo</h5>
                </div>
                <br>
                <div class="content">
                    <p>La seguridad y salud en el trabajo son aspectos cruciales en cualquier organizacion. Con
                        nuestro servicio SG - SST, puedes garantizar el cumplimiento de todas las normativas de
                        seguridad, reducir riesgos y proteger a tus empleados. La seguridad en el trabajo es
                        nuestra prioridad. <br>
                        <br>
                        <a href="{{ route('ruta_gestion_Ips') }}" class="btn btn-warning btn-sm"
                            rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/PMIRS.png') }} alt="Gestion Empresarial.png">
                    <h5 class="text-center">PMIRS</h5>
                </div>
                <br>
                <div class="content">
                    <p>En CG VERTICE, diseñamos e implementamos Planes de Manejo Integral de Residuos Sólidos,
                        enfocados en la gestión eficiente y responsable de los residuos generados en tu organizacion.
                        Nuestro
                        objetivo es promover prácticas sostenibles que minimicen el impacto ambiental y cumplan con las
                        normativas vigentes apoyado en los modelos de economía circular. <br>
                        <br>
                        <a href="{{ route('ruta_gestion_desarrollo', ['tab' => '5']) }}" class="btn btn-warning btn-sm"
                            rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/PBR.jpeg') }} alt="Bateria de riesgo psicosocial">
                    <h5 class="text-center">Riesgo Psicosocial</h5>
                </div>
                <br>
                <div class="content">
                    <p>El Analisis de Riesgo Psicosocial es un conjunto estructurado de herramientas y metodologías que
                        permiten evaluar diversos factores psicosociales que afectan la salud mental y el rendimiento en
                        el trabajo. A través de la recopilación y análisis de datos, estas herramientas proporcionan una
                        visión detallada sobre el impacto de estos factores en el ambiente laboral.<br>
                        <br>
                        <a href="{{ route('ruta_gestion_desarrollo', ['tab' => '6']) }}" class="btn btn-warning btn-sm"
                            rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>

                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/disenoPEI.png') }} alt="IPS Gerencial.png">
                    <h5 class="text-center">Diseño P.E.I</h5>
                </div>
                <br>
                <div class="content">
                    <p class="p">El Proyecto Educativo Institucional (PEI) es el documento que define la identidad
                        de la institución educativa, estableciendo su misión, visión, objetivos y estrategias
                        pedagógicas. En GC-VÉRTICE, nos especializamos en diseñar e implementar el PEI, asegurando su
                        coherencia con los principios y metas de la institución, así como con las directrices del
                        Ministerio de Educación Nacional. Nuestro servicio abarca la creación de planes estratégicos que
                        orientan el desarrollo integral de la comunidad educativa y promueven una educación de alta
                        calidad. <br>
                        <br>
                        <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Diseño%20PEI."
                            class="btn btn-warning btn-sm" rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-4">
            <!-- Agrega la URL a la que deseas redirigir cuando se hace clic -->
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/InstitucionesEducativasCarta.jpg') }} alt="Sistemas de Salud en el Trabajo.png">
                    <h5 class="text-center">Instituciones Educativas</h5>
                </div>
                <div class="content">
                    <p> GC-VÉRTICE tenemos una amplia cobertura de Instituciones educativas. En este ambito trabajamos con
                        Instituciones Educativas Superiores, Instituciones de formación y desarrollo humano,
                        Instituciones de educación formal regular. Incluimos asesoramiento en Diseño y contenido de plataformas virtuales al igual que videos, Flyers, infografías, etc.<br>
                        <br>
                        <a href="https://wa.me/573016280574?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20Mallas%20curriculares."
                            class="btn btn-warning btn-sm" rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <!-- Agrega la URL a la que deseas redirigir cuando se hace clic -->
            <div class="card">
                <div class="imgBx">
                    <img src={{ asset('img/Capacitacion.jpg') }} alt="Sistemas de Salud en el Trabajo.png">
                    <h5 class="text-center">Formación a la medida</h5>
                </div>
                <div class="content">
                    <p>En CG VERTICE, ofrecemos formación a la medida, adaptada a las particularidades de tu
                        organización. Desarrollamos programas de capacitación que no solo cumplen con las normativas de
                        seguridad, sino que también impulsan el desarrollo profesional de tu equipo, fortaleciendo la
                        cultura de seguridad en el trabajo. <br>
                        <br>
                        <a href="{{ route('ruta_formacion_continua') }}" class="btn btn-warning btn-sm"
                            rel="noopener noreferrer">
                            Conozca más
                        </a>
                    </p>
                </div>
            </div>
            </a>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el parámetro 'tab' de la URL
        var urlParams = new URLSearchParams(window.location.search);
        var tab = urlParams.get('tab');

        // Si hay un tab especificado en la URL, activarlo
        if (tab) {
            var selectedTab = new bootstrap.Tab(document.getElementById(tab + '-tab'));
            selectedTab.show();
        }
    });
</script>
