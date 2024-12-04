<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.NewNavbar')
    @include('sistema.CGV.includes.regresarArriba')

    <section class="section-abouts">
        <div class="content-Servicios">
            <p class="text-center titulo" id="animated-title">Servicios</p>
            <p class="text-center texto" id="animated-text">
                <i id="start-i" class="fas fa-quote-left"></i>
                <span id="typed-text">Conozca nuestros servicios para usted y su crecimiento empresarial.</span>
                <i id="start-i" class="fas fa-quote-right"></i>
            </p>
        </div>
    </section>
    &nbsp;
    <div class="container py-1">
        <hr>
    </div>
    <div class="Centrar">
        <div class="EncabezadoSer">
            <div class="row" style="cursor: default">
                <div class="col-12 text-center mt-8">
                    <h3 class="acrostico">
                        <span class="letter">Conozca todo acerca de...</span>
                    </h3>
                </div>
                <div class="mt-5">
                    <p style="font-size: 20px">Corporate Group Vértice SAS, con más de 15 años de experiencia en
                        procesos de consultoría de Gestión,
                        ha acompañado a más de 350 empresarios a nivel nacional en la gestión del cumplimiento
                        normativo.
                        Con un amplio portafolio empresarial llegamos a nuestros usuarios con beneficios integradores,
                        que les permite efectividad y eficiencia en el alcance de sus objetivos.
                    </p>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
    <section class="Timeline">
        <div class="container py-4" style="pointer:default;">
            <div class="main-timeline-2">
                {{-- Gestión de empresas --}}
                <div class="timeline-2 left-2" id="GestioenEmpresas">
                    <div class="card">
                        <a data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src={{ asset('img/GestionEmpresas.png') }} class="card-img-top"
                                style="width: 100%; height: auto;" alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4 " style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Gestión de empresas
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                Ofrecemos soluciones integrales para optimizar la administración y operación de tu
                                empresa, enfocándonos en el desarrollo estratégico, eficiencia operativa y cumplimiento
                                normativo para impulsar el crecimiento sostenible y el éxito empresarial.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header titulo-modal">
                                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Gestion Empresarial</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src={{ asset('img/GestionEmpresas.png') }} class="card-img-top imgpopup"
                                        style="width: 765px; height: 400px;" alt="Gestion de empresas">
                                    <br><br>
                                    <div class="container justify-content-around">
                                        Ofrecemos soluciones integrales para optimizar la administración y operación de
                                        tu empresa, enfocándonos en el desarrollo estratégico, eficiencia operativa y
                                        cumplimiento normativo para impulsar el crecimiento sostenible y el éxito
                                        empresarial.
                                        <hr>
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de gestión empresarial</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Gestión de calidad de su empresa
                                            </b>
                                            <br><br>
                                            En CG-VERTICE enfocamos nuestros esfuerzos para garantizar que su empresa
                                            cumpla con los más altos estándares de calidad. Implemendo sistemas de
                                            gestión de calidad personalizados que se alineen con sus objetivos y
                                            aseguren el cumplimiento normativo. Nuestra meta es mejorar la eficiencia
                                            operativa, reducir errores y aumentar la satisfacción de sus clientes,
                                            promoviendo una cultura organizacional orientada hacia la excelencia.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="/GestionCalidad" style="color: black">Ver</a></button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Gestión de desarrollo empresarial
                                            </b>
                                            <br><br>
                                            Ayudamos a su empresa a crecer de manera sostenible, desarrollando
                                            estrategias que potencian su competitividad en el mercado. Ofrecemos
                                            asesoramiento integral en la planificación estratégica, expansión de
                                            mercados y optimización de recursos. Nuestro enfoque está en identificar
                                            nuevas oportunidades de negocio, mejorar la eficiencia operativa y asegurar
                                            el crecimiento a largo plazo.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="/gestionDesarrollo
                                                "
                                                    style="color: black;">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                IPS Gerencial
                                            </b>
                                            <br><br>
                                            Proveemos a su empresa con un servicio integral de consultoría gerencial
                                            para fortalecer la toma de decisiones estratégicas. A través de nuestro
                                            enfoque en la Inteligencia y Planificación Estratégica (IPS), le ayudamos a
                                            anticipar cambios en el entorno empresarial, gestionar riesgos y aprovechar
                                            oportunidades. Trabajamos de la mano con la alta dirección para diseñar y
                                            ejecutar planes que maximicen el rendimiento de su empresa.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="/GestionIps" style="color: black">Ver</a></button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Gestión de instituciones educativas --}}
                <div class="timeline-2 right-2" id="GestionE">
                    <div class="card">
                        <a data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src={{ asset('img/gestionIE.jpg') }} class="card-img-top"
                                style="width: 100%; height: auto;" alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Gestión de Instituciones Educativas
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                Ofrecemos un servicio integral para optimizar la administración de instituciones
                                educativas, incluyendo la creación de manuales de convivencia, el diseño de Proyectos
                                Educativos Institucionales (PEI), y el desarrollo de mallas curriculares, asegurando un
                                entorno educativo organizado, eficiente y alineado con los estándares de calidad.
                            </p>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 titulo-modal" id="exampleModalLabel">Gestión
                                        Instituciones Educativas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- imagen de video al principio del modal -->
                                <div class="modal-body">
                                    <img src={{ asset('img/gestionIE.jpg') }} class="card-img-top imgpopup"
                                        alt="...">
                                    <br><br>

                                    <!-- texto debajo de la imagen del video -->
                                    <div class="container justify-content-around">
                                        En CG-VÉRTICE, entendemos que la educación es la base para el desarrollo de una
                                        sociedad próspera y equitativa. Por eso, hemos diseñado una gama de servicios
                                        especializados en la Gestión de Instituciones Educativas que buscan fortalecer
                                        la calidad y la eficiencia de los procesos educativos.
                                        <br><br>
                                        Desde la elaboración de <strong>Manuales de Convivencia</strong> que promuevan
                                        un ambiente escolar saludable, hasta la <strong>Evaluación
                                            Institucional</strong> que mide el desempeño general de la institución,
                                        nuestros servicios están enfocados en el cumplimiento normativo y en la
                                        implementación de prácticas educativas innovadoras. Nos comprometemos a ser un
                                        aliado estratégico para las instituciones educativas, ayudándoles a alcanzar sus
                                        metas y a ofrecer una educación de excelencia que prepare a los estudiantes para
                                        los desafíos del futuro.
                                        <hr>
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de gestión Instituciones Educativas
                                            </h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Manuales de Convivencia
                                            </b>
                                            <br><br>
                                            El Manual de Convivencia es un documento esencial que establece las normas,
                                            derechos, y deberes de todos los miembros de la comunidad educativa.
                                            GC-VÉRTICE se especializa en la creación y actualización de manuales de
                                            convivencia que cumplen con las normativas educativas vigentes en Colombia,
                                            garantizando un ambiente escolar armonioso y respetuoso. Nuestro enfoque es
                                            asegurar que el manual sea claro, inclusivo y adaptado a las necesidades
                                            específicas de cada institución, promoviendo una cultura de paz y
                                            convivencia dentro del entorno escolar.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Manuales%20de%20Convivencia."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Diseño de PEI
                                            </b>
                                            <br><br>
                                            El Proyecto Educativo Institucional (PEI) es el documento que define la
                                            identidad de la institución educativa, su misión, visión, objetivos y
                                            estrategias pedagógicas. En GC-VÉRTICE, nos encargamos del diseño y la
                                            implementación del PEI, asegurando que esté alineado con los principios y
                                            objetivos de la institución, así como con las directrices del Ministerio de
                                            Educación Nacional. Nuestro servicio incluye la formulación de planes
                                            estratégicos que guían el desarrollo integral de la comunidad educativa,
                                            fomentando una educación de calidad.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Diseño%20de%20PEI."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Mallas Curriculares
                                            </b>
                                            <br><br>
                                            Las Mallas Curriculares son la estructura que organiza los contenidos
                                            educativos de manera secuencial y coherente, garantizando el desarrollo
                                            progresivo de competencias en los estudiantes. GC-VÉRTICE ofrece la
                                            elaboración y revisión de mallas curriculares adaptadas a las necesidades
                                            específicas de cada institución, asegurando que estén en consonancia con los
                                            estándares de calidad educativa establecidos por el gobierno. Nuestro
                                            objetivo es facilitar el aprendizaje significativo y preparar a los
                                            estudiantes para los retos del siglo XXI.
                                            <br><br>

                                            <h4 style="color: #b8860b">Te ofrecemos</h4>

                                            <ul class="check-list">
                                                <li>Análisis de procesos</li>
                                                <li>Viabilidad de recursos</li>
                                                <li>Viabilidad del sector </li>
                                                <li>Diseño de estructura curricular</li>
                                                <li>Acompañamiento del proceso de registro y radicación</li>
                                            </ul>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Mallas%20Curriculares."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Evaluación Docentes
                                            </b>
                                            <br><br>
                                            La Evaluación de Docentes es un proceso fundamental para asegurar la calidad
                                            educativa dentro de una institución. GC-VÉRTICE proporciona un servicio
                                            integral de evaluación de docentes, basado en criterios objetivos y alineado
                                            con las normativas del Ministerio de Educación Nacional. Nuestro enfoque es
                                            identificar fortalezas y áreas de mejora, ofreciendo recomendaciones para el
                                            desarrollo profesional continuo de los educadores y garantizando así una
                                            enseñanza efectiva y de alta calidad.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Evaluación%20Docentes."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Evaluación Institucional
                                            </b>
                                            <br><br>
                                            La Evaluación Institucional es un proceso de diagnóstico y análisis que
                                            permite a las instituciones educativas medir su desempeño y efectividad en
                                            la consecución de sus objetivos. GC-VÉRTICE ofrece un servicio de evaluación
                                            institucional exhaustivo, que incluye la recolección y análisis de datos, la
                                            identificación de áreas críticas y la propuesta de planes de mejora. Nuestro
                                            objetivo es acompañar a las instituciones en su proceso de mejora continua,
                                            asegurando la excelencia en la educación y el cumplimiento de las normativas
                                            educativas nacionales.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Evaluación%20Institucional."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Educación y formación --}}
                <div class="timeline-2 left-2" id="GestionEdu">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src={{ asset('img/formacion.png') }} class="card-img-top"
                                style="width: 100%; height: auto;" alt="Imagen 1">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Educación y formación
                        </h3>
                        <div class="card-body p-1">
                            <p class="m-4">
                                Proveemos capacitación especializada en diversas áreas empresariales, incluyendo
                                Sistemas de Gestión de Seguridad y Salud en el Trabajo (SG-SST), Bases de Datos, Gestión
                                de Proyectos (PMIRS), Mallas Curriculares, y más. Nuestro servicio está diseñado para
                                asegurar que tanto empleados como directivos estén plenamente capacitados en normativas,
                                procedimientos y buenas prácticas, garantizando un entorno laboral eficiente y seguro en
                                todo tipo de empresas, incluyendo propiedades horizontales e intituciones educativas.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Educación y formación</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src={{ asset('img/formacion.png') }} class="card-img-top imgpopup"
                                        alt="...">
                                    <br><br>
                                    <div class="container justify-content-around">
                                        En GC-VÉRTICE, creemos que la capacitación continua es clave para el éxito y la
                                        adaptación de las empresas en un entorno en constante cambio. Nuestro segmento
                                        de Educación y Formación ofrece programas de capacitación tanto presenciales
                                        como virtuales, diseñados para abordar las necesidades específicas de cada
                                        organización en temas relacionados con el Sistema de Gestión de Seguridad y
                                        Salud en el Trabajo (SG-SST) y otras áreas relevantes.
                                        <br><br>
                                        Nuestro objetivo es proporcionar a las empresas herramientas y conocimientos
                                        prácticos que les permitan cumplir con la normativa vigente, mejorar su
                                        desempeño y fomentar un ambiente laboral seguro y productivo.
                                        <hr>
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de gestión Instituciones Educativas
                                            </h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Formación continua
                                            </b>
                                            <br><br>
                                            La Formación Continua de GC-VÉRTICE está orientada a proporcionar a los
                                            empleados y directivos de las empresas conocimientos actualizados y
                                            habilidades prácticas en temas relacionados con el SG-SST y otras áreas
                                            clave. Nuestros cursos, que se pueden realizar de manera presencial o
                                            virtual, están diseñados para mantener a los participantes al día con las
                                            últimas normativas y mejores prácticas, contribuyendo a la mejora continua
                                            de la organización.
                                            <br><br>
                                            <strong style="font-size: 24px; color:#b8860b; text-align: center">Te
                                                ofrecemos:</strong>
                                            <ul class="check-list">
                                                <li><strong>Capacitación actualizada</strong></li>
                                                <li><strong>Modalidades flexibles</strong></li>
                                                <li><strong>Expertos en la materia</strong></li>
                                                <li><strong>Certificación</strong></li>
                                            </ul>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Estoy%20interesado%20en%20el%20servicio%20de%20Educación%20y%20Formación."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Formación a la medida
                                            </b>
                                            <br><br>
                                            La <strong>Formación a la Medida</strong> de GC-VÉRTICE está diseñada para
                                            ofrecer soluciones de capacitación personalizadas que se ajusten a las
                                            necesidades específicas de cada empresa. Este servicio permite desarrollar
                                            programas de formación adaptados a los desafíos particulares y objetivos
                                            estratégicos de la organización, garantizando que la capacitación sea
                                            relevante y directamente aplicable a su contexto.
                                            <br><br>
                                            <strong
                                                style="font-size: 24px; color:#b8860b; text-align: center">Obtendras:</strong>
                                            <ul class="check-list">
                                                <li><strong>Diseño personalizado:</strong> Programas de formación
                                                    desarrollados con base a un análisis de las necesidades específicas
                                                    de la empresa.</li>
                                                <li><strong>Flexibilidad:</strong> Capacitación en horarios y formatos
                                                    que se adapten a la dinámica laboral de la organización.</li>
                                                <li><strong>Relevancia:</strong> Contenidos y metodologías ajustados a
                                                    los retos y objetivos particulares de la empresa.</li>
                                                <li><strong>Soporte continuo:</strong> Asesoramiento y seguimiento
                                                    durante y después de la formación para asegurar la implementación
                                                    efectiva de los conocimientos adquiridos.</li>
                                            </ul>
                                            <button type="button" class="btn btn-warning">
                                                <a href="FormacionContinua" style="color: black">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Instituciones Educativas
                                            </b>
                                            <br><br>
                                            En Corporate Group vértice ofrecemos servicios para el correcto
                                            funcionamiento de instituciones educativas,
                                            Instuciones Educaticas Superiores, Instituciones de formación y desarrollo
                                            humano e instituciones de educación formal integral.
                                            Incluimos programas de conocimiento académicos, contenidos de pregrados y
                                            postgrados. Asesoramos tu institución con diseño y
                                            contenido para plataformas virtuales tales como videos, infografías, flyers,
                                            evaluaciones, etc.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573016280574?text=Hola,%20Estoy%20interesado%20en%20el%20servicio%20de%20Instituciones%20Educativas."
                                                    style="color: black" target="blank">Cotizar</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PH --}}
                <div class="timeline-2 right-2" id="PH">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src={{ asset('img/ph.jpeg') }} class="card-img-top"
                                style="width: 100%; height: auto;" alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            PH (Propiedades Horizontales)
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                En el ámbito de la administración de Propiedades Horizontales (PH), asegurar el
                                funcionamiento óptimo y la seguridad de las instalaciones es crucial para la
                                satisfacción de los propietarios y la operatividad general del complejo. Una adecuada
                                gestión de las PH requiere la implementación de una serie de servicios y normativas
                                esenciales para garantizar un entorno seguro, conforme a las regulaciones y eficiente en
                                su funcionamiento.
                            </p>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal6" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 titulo-modal" id="exampleModalLabel">Propiedades
                                        Horizontales</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- imagen de video al principio del modal -->
                                <div class="modal-body">
                                    <img src={{ asset('img/ph.jpeg') }} class="card-img-top imgpopup"
                                        alt="Imagen de Referencia a PH">
                                    <br><br>

                                    <!-- texto debajo de la imagen del video -->
                                    <div class="container justify-content-around">
                                        En CG-VÉRTICE, entendemos que la gestión de Propiedades Horizontales requiere un
                                        enfoque integral para garantizar un entorno seguro, saludable y bien organizado
                                        para todos los residentes y usuarios. Nuestro segmento de Propiedades
                                        Horizontales ofrece una gama de servicios especializados que ayudan a las
                                        administraciones de conjuntos residenciales y edificios comerciales a cumplir
                                        con las normativas vigentes, mantener la seguridad y el bienestar de sus
                                        comunidades, y gestionar eficientemente sus recursos.
                                        <br><br>
                                        Con un enfoque en la prevención y el cumplimiento, GC-VÉRTICE se posiciona como
                                        un aliado estratégico para la gestión efectiva de propiedades horizontales.
                                        <hr>
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de Propiedades Horizontales</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                SST
                                            </b>
                                            <br><br>
                                            CG-VÉRTICE ofrece servicios de asesoría y gestión en Seguridad y Salud en el
                                            Trabajo (SG-SST) para propiedades horizontales, asegurando que las áreas
                                            comunes y laborales cumplan con las normativas vigentes. Nuestro objetivo es
                                            prevenir riesgos laborales y garantizar un ambiente seguro para todos los
                                            trabajadores y residentes.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a style="color: black" href="{{ route('ruta_gestion_Ips') }}">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                PMIRS
                                            </b>
                                            <br><br>
                                            El Plan de Manejo Integral de Residuos Sólidos (PMIRS) es esencial para la
                                            correcta gestión de los desechos en propiedades horizontales. GC-VÉRTICE se
                                            encarga de diseñar e implementar planes de manejo que promuevan la
                                            sostenibilidad y el cumplimiento normativo en la gestión de residuos,
                                            reduciendo el impacto ambiental.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a style="color: black"
                                                    href="{{ route('ruta_gestion_desarrollo', ['tab' => '5']) }}">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                BD
                                            </b>
                                            <br><br>
                                            Nuestro servicio de <strong>gestión de Bases de Datos</strong> para
                                            propiedades horizontales, facilita la organización y el manejo eficiente de
                                            la información relacionada con residentes, trabajadores y procesos
                                            administrativos. Este servicio asegura que la información esté bien
                                            organizada y sea fácilmente accesible para la administración.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a style="color: black"
                                                    href="{{ route('ruta_gestion_desarrollo', ['tab' => '7']) }}">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Planes de Emergencia
                                            </b>
                                            <br><br>
                                            Elaboramos Planes de Emergencia adaptados a las necesidades de cada
                                            propiedad horizontal, proporcionando estrategias y procedimientos claros
                                            para la prevención y respuesta ante situaciones de emergencia. CG-VÉRTICE
                                            asegura que los planes cumplan con las normativas legales y estén diseñados
                                            para proteger la vida y los bienes de todos los residentes y usuarios.
                                            <br><br>

                                            <button type="button" class="btn btn-warning">
                                                <a style="color: black"
                                                    href="{{ route('ruta_gestion_desarrollo', ['tab' => '8']) }}">Ver</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Supervision e Interventoria --}}
                <div class="timeline-2 left-2" id="Interventoria">
                    <div class="card">
                        <a data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src={{ asset('img/GestionEmpresas.png') }} class="card-img-top"
                                style="width: 100%; height: auto;" alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4 " style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Supervisión e Interventoria
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                En Corporate Group Vértice, nos comprometemos a ofrecer servicios de supervisión e interventoría de alta calidad, alineados con las normativas legales vigentes y las mejores prácticas en gestión de proyectos. Este servicio está diseñado para garantizar el cumplimiento de los objetivos de los contratos, supervisando cada etapa del proyecto con el fin de asegurar eficiencia, calidad, y sostenibilidad.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning">
                        <a href="/supervisionInterventoria" style="color: black">Mas Información
                    </a></button>
                    
                </div>
            </div>
        </div>
    </section>

    @include('sistema.CGV.includes.botonWhatsapp')
    @include('sistema.CGV.includes.footer')
    <script src={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<script src={{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
