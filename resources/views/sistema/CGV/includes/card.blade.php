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
        color: #555555;
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
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
</head>

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
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/ceet.png') }}" alt="Logo de Vértice">
                <h3>Induccion SST</h3>
            </div>
            <div class="face back">
                <h3>Induccion SST</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Details</a>
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
                    <a href="#">Details</a>
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
                        <p id="modalDescription">Descripción del curso</p>
                        <ul id="modalDetails" class="list-group">
                            <!-- Detalles adicionales del curso -->
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <!-- Botón Inscribirse que abre el enlace en una nueva pestaña -->
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
                details: ['Duración: 40 horas', 'Modalidad: Online', 'Certificación incluida',
                    'Introducción a la Auditoría Interna', 'Módulo 1 - Normas ISO 9000 y 9001 (2015)',
                    'Módulo 2 - Auditoría Interna', 'Módulo 3 - Auditorías a las Normas ISO',
                    'Módulo 4 - Normas Auditor Interno'
                ]
            },
            {
                title: 'Induccion SST',
                description: 'Curso de inducción en seguridad y salud en el trabajo...',
                details: ['Duración: 20 horas', 'Modalidad: Presencial', 'Incluye material didáctico']
            },
            {
                title: 'Pedagogía',
                description: 'Curso de pedagogía enfocado en metodologías activas...',
                details: ['Duración: 30 horas', 'Modalidad: Online', 'Incluye talleres prácticos']
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
