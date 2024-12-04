<style>
    .contenedor-principal {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        min-height: 60vh;
    }

    .card {
        position: relative;
        width: 300px;
        height: 350px;
        margin: 20px;
    }

    .card .face {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
        transition: .5s;
    }

    .card .front {
        transform: perspective(600px) rotateY(0deg);
        box-shadow: 0 5px 10px #000;
    }

    .card .front img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card .front h3 {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 45px;
        line-height: 45px;
        color: #fff;
        background: rgba(0, 0, 0, .4);
        text-align: center;
    }

    .card .back {
        transform: perspective(600px) rotateY(180deg);
        background: #1b1b1b;
        color: #fff;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        box-shadow: 0 5px 10px #000;
    }

    .card .back .link {
        border-top: solid 1px #f3f3f3;
        height: 50px;
        line-height: 50px;
    }

    .card .back .link a {
        color: #b8860b;
    }

    .card .back h3 {
        font-size: 30px;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    .card .back p {
        letter-spacing: 1px;
    }

    .card:hover .front {
        transform: perspective(600px) rotateY(180deg);
    }

    .card:hover .back {
        transform: perspective(600px) rotateY(360deg);
    }

    /* Modal Header */
    .modal-header {
        justify-content: center;
        position: relative;
    }

    .modal-header .modal-title {
        font-size: 40px !important;
        color: #b8860b;
    }

    .modal-header .btn-close {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Estilos para la introducción y objetivos */
    .course-introduction,
    .course-objectives {
        margin-top: 20px;
    }

    .course-introduction h5,
    .course-objectives h5 {
        font-size: 22px;
        color: #b8860b;
        margin-bottom: 10px;
    }

    .course-introduction p,
    .course-objectives ul {
        font-size: 16px;
        color: #555;
    }

    .course-objectives ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    .course-objectives ul li {
        margin-bottom: 8px;
    }

    /* Detalles del curso */
    #modalDetails {
        margin-top: 20px;
    }

    #modalDetails .list-group-item {
        font-size: 16px;
        color: #555;
    }

    /* Botón Inscribirse */
    .modal-footer .btn-primary {
        background-color: #b8860b;
        border-color: #b8860b;
    }

    .modal-footer .btn-primary:hover {
        background-color: #8b6a2b;
        border-color: #8b6a2b;
    }

    .modal-body .titulo-detalles {
        font-size: 20px !important;
        color: #b8860b;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
</head>
//esta es la seccion de

<body>
    <div class="contenedor-principal">
        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/Auditoria.jpg') }}" alt="Tarjeta promocional curso de auditoria">
                <h3>Auditoria interna HSEQ</h3>
            </div>
            <div class="face back">
                <h3>Auditoria interna HSEQ</h3>
                <p>Aprende a evaluar y mejorar la gestión, control y eficiencia en tu organización con nuestro curso
                    especializado y mejora la toma de decisiones para un crecimiento sostenible.</p>
                <div class="link">
                    <a href="#">Conoce mas!</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/sst.jpg') }}" alt="Logo de Vértice">
                <h3>Induccion SST</h3>
            </div>
            <div class="face back">
                <h3>Induccion SST</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Conoce mas!</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/ceet.png') }}" alt="Logo de Vértice">
                <h3>Pedagogía</h3>
            </div>
            <div class="face back">
                <h3>Pedagogía</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Conoce mas!</a>
                </div>
            </div>
        </div>

        <!-- Modal Bootstrap -->
        <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="modalDescription" class="gestionD_P">Descripción del curso</p>

                        <div id="modalIntroduction" class="course-introduction">
                            <h5>Introducción</h5>
                            <p></p>
                        </div>

                        <div id="modalObjectives" class="course-objectives">
                            <h5>Objetivos</h5>
                            <ul></ul>
                        </div>

                        <h5 class="titulo-detalles">Que Verás en el curso</h5>
                        <ul id="modalDetails" class="list-group">
                            <!-- Detalles Adicionales del curso -->
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a href="https://forms.gle/8SMLABK5Gm1775QC8" target="_blank"
                            class="btn btn-primary">Inscribirse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Información de los cursos
        const courseData = [{
                title: 'Auditoria interna HSEQ',
                description: 'Aprende a evaluar y mejorar la gestión, control y eficiencia en tu organización con nuestro curso especializado y mejora la toma de decisiones para un crecimiento sostenible.',
                introduction: '¿Te gustaría convertirte en un auditor interno experto? Este curso te brinda las competencias necesarias para evaluar y mejorar sistemas de gestión HSEQ. Descubre cómo aplicar Normas ISO y realizar auditorías que impulsen el crecimiento sostenible de tu organización. A lo largo del curso, descubrirás cómo interpretar y aplicar las Normas ISO más relevantes para asegurar el cumplimiento normativo y la eficiencia operativa. Aprenderás a leer y analizar normas técnicas colombianas y sectoriales, y te sumergirás en las reglas que todo auditor interno debe dominar para realizar evaluaciones efectivas y confiables. Todo esto mientras fortaleces tus habilidades para identificar áreas de mejora y proponer soluciones estratégicas.',
                objectives: [
                    'Dominar los fundamentos de las Normas ISO (9001, 14001, 45001).',
                    'Desarrollar habilidades prácticas en auditoría interna.',
                    'Comprender las Normas Técnicas Colombianas y Sectoriales.',
                    'Aplicar las reglas del auditor interno de manera ética y profesional.',
                    'Promover el crecimiento organizacional mediante procesos optimizados.'
                ],
                details: ['Introducción a la Auditoría Interna', 'Módulo 1 - Normas ISO 9000 y 9001 (2015)',
                    'Módulo 2 - Auditoría Interna', 'Módulo 3 - Auditorías a las Normas ISO',
                    'Módulo 4 - Normas Auditor Interno', 'Duración: 40 horas', 'Modalidad: Online',
                    'Certificación incluida',
                ]
            },
            {
                title: 'Induccion SST',
                description: 'Curso de inducción en seguridad y salud en el trabajo...',
                introduction: 'Introducción al curso',
                objectives: [
                    'Objetivo 1',
                    'Objetivo 2',
                    'Objetivo 3',
                ],
                details: ['Duración: 20 horas', 'Modalidad: Presencial', 'Incluye material didáctico']
            },
            {
                title: 'Formación para formadores',
                description: 'Conviértete en un formador experto con nuestro curso especializado en pedagogía y andragogía. Aprende a diseñar estrategias de enseñanza efectivas, desarrollar competencias, y explorar metodologías innovadoras para la educación de adultos, integrando herramientas disruptivas y tecnológicas en tus procesos de formación.',
                introduction: 'Este curso te brinda las competencias necesarias para liderar procesos educativos innovadores y efectivos. Con una sólida base en pedagogía, andragogía y educación disruptiva, serás capaz de diseñar programas formativos adaptados a las necesidades de los adultos, empleando metodologías modernas y herramientas tecnológicas avanzadas.',
                objectives: [
                    'Comprender las diferencias y aplicaciones de pedagogía, andragogía y pedagogía para adultos.',
                    'Desarrollar competencias clave para diseñar e implementar programas educativos efectivos.',
                    'Aplicar metodologías didácticas para la enseñanza y aprendizaje de adultos.',
                    'Integrar fundamentos constructivistas y multididácticos en los procesos educativos.',
                    'Identificar y aplicar diferentes tipos de pedagogía en diversos contextos.',
                    'Diseñar estrategias de aprendizaje innovadoras mediante la incorporación de educación disruptiva y tecnologías modernas.'
                ],
                details: [
                    'Módulo 1 - Fundamentos de la Formación',
                    'Módulo 2 - Didáctica de Adultos',
                    'Módulo 3 - Métodos de Formación de Adultos',
                    'Módulo 4 - Tipos de Pedagogía',
                    'Módulo 5 - Andragogía',
                    'Módulo 6 - Educación Disruptiva',
                    'Duración: 40 horas',
                    'Modalidad: Online',
                    'Certificación incluida'
                ]
            }
        ];

        // Configurar cada tarjeta para abrir el modal con la información correcta
        document.querySelectorAll('.card .link a').forEach((link, index) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                // Obtener la información del curso seleccionado
                const course = courseData[index];

                // Actualizar el contenido del modal
                document.getElementById('modalTitle').textContent = course.title;
                document.getElementById('modalDescription').textContent = course.description;

                // Actualizar la introducción
                document.getElementById('modalIntroduction').querySelector('p').textContent = course
                    .introduction;

                // Actualizar los objetivos
                const objectivesList = document.getElementById('modalObjectives').querySelector('ul');
                objectivesList.innerHTML = ''; // Limpiar los objetivos previos
                course.objectives.forEach(objective => {
                    const listItem = document.createElement('li');
                    listItem.textContent = objective;
                    objectivesList.appendChild(listItem);
                });

                // Limpiar detalles previos y añadir los nuevos
                const detailsList = document.getElementById('modalDetails');
                detailsList.innerHTML = '';
                course.details.forEach(detail => {
                    const listItem = document.createElement('li');
                    listItem.classList.add('list-group-item');
                    listItem.textContent = detail;
                    detailsList.appendChild(listItem);
                });

                // Mostrar el modal de Bootstrap
                const bootstrapModal = new bootstrap.Modal(document.getElementById('courseModal'));
                bootstrapModal.show();
            });
        });
    </script>
</body>

</html>
