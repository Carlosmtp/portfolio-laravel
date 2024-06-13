<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap');
    </style>
    <title>Carlos Tovar</title>
</head>

<body>
    <header id="index-header">
        @include('partials.header')
    </header>
    <section id="banner-perfil">
        <div class="contenido-banner">
            <h3>
                <b>Carlos Tovar</b>,<br>
                <ul>
                    <li>Estudiante de Ingeniería de Sistemas</li>
                    <li>Desarrollador y administrador de sistemas</li>
                    <li>Apasionado por la tecnología y la programación</li>
                </ul>
            </h3>
            <a href="img/CV_CarlosTovar.pdf" class="boton-banner" download><i
                    class="fas fa-download material-symbols-outlined"></i>Descargar CV</a>
        </div>
    </section>
    <section id="perfil">
        <div class="contenido-perfil">
            <h2>Perfil Profesional</h2>
            <p>Como estudiante de Ingeniería de Sistemas, he adquirido una sólida base en programación y resolución de
                problemas, complementada con experiencias en roles de monitoría en mi alma mater. Durante este tiempo,
                he cultivado habilidades en administración de sistemas, soporte técnico, trabajo en equipo y liderazgo.
            </p>

            <p>Mi pasión por resolver problemas complejos me impulsa a buscar constantemente nuevas tecnologías y
                enfoques innovadores en el desarrollo de software y la administración de sistemas. Estoy motivado por la
                oportunidad de aplicar mis habilidades en un entorno profesional, contribuyendo a proyectos desafiantes
                y de impacto en el mercado.</p>
        </div>
    </section>
    <section id="habilidades">
        <div class="contenido-habilidades">
            <div class="tarjeta">
                <i class="fas fa-laptop-code material-symbols-outlined"></i>
                <h3>Programación</h3>
                <p>HTML, CSS, JavaScript, React, Prisma, Python, Django etc.</p>
            </div>
            <div class="tarjeta">
                <i class="fas fa-server material-symbols-outlined"></i>
                <h3>Administración de Sistemas</h3>
                <p>Linux, Docker, AWS, Google Cloud, etc.</p>
            </div>
            <div class="tarjeta">
                <i class="fas fa-database material-symbols-outlined"></i>
                <h3>Bases de Datos</h3>
                <p>SQL, MongoDB, Firebase, etc.</p>
            </div>
            <div class="tarjeta">
                <i class="fas fa-cogs material-symbols-outlined"></i>
                <h3>Desarrollo de Software</h3>
                <p>Metodologías Ágiles: Scrum, Kanban, QA</p>
            </div>
        </div>
    </section>
    <section id="experiencia" class="experiencia">
        <ol class="lista-experiencia">
            <li>
                <div class="triangle-list"></div>
                <div class="date">mar. 2023 - Actualidad</div>
                <h3>Desarrollador y Administrador de Sistemas</h3>
                <h4>Estrategia Ases - Universidad del Valle</h4>
                <p>
                    Actualmente, como monitor en la Universidad del Valle, me ocupo del desarrollo y mantenimiento del
                    Sistema de Información ASES que usa las tecnologías de Python, Django, Javascript y React. Además,
                    administro el servidor utilizando Oracle Linux 8 y Apache, y lidero la gestión de bases de datos.
                    Recientemente, participé en la migración e implementación
                    exitosa del Sistema de Información desde un antiguo módulo del campus virtual. Este rol ha
                    fortalecido mis habilidades en gestión de proyectos, liderazgo y trabajo en equipo.
                </p>
            </li>
            <li>
                <div class="triangle-list"></div>
                <div class="date">nov. 2021 - ago. 2022</div>
                <h3>Desarrollador Fullstack</h3>
                <h4>Estrategia Ases - Universidad del Valle</h4>
                <p>
                    Formé parte del equipo de desarrollo y mantenimiento del módulo de la estrategia de acompañamiento
                    estudiantil ASES, que se ejecutaba en el campus virtual de la Universidad del Valle a través de
                    Moodle. En este rol de monitoría, colaboré en la solución de incidencias y en la implementación de
                    nuevas funcionalidades utilizando PHP, JavaScript, HTML y CSS. Además, trabajé en la administración
                    y mantenimiento de bases de datos con PostgreSQL. Este puesto me permitió desarrollar mis
                    habilidades en la resolución de problemas, trabajo en equipo y en la programación en los lenguajes
                    mencionados.
                </p>
            </li>
            <li>
                <div class="triangle-list"></div>
                <div class="date">ene. 2021 - jun 2021</div>
                <h3>Tutor de Algoritmia y Programación</h3>
                <h4>EISC - Universidad del Valle</h4>
                <p>
                    Trabajé como monitor en el curso de Algoritmia y Programación de la Escuela de Ingeniería de
                    Sistemas y Computación, donde brindé asesoramiento en Python a estudiantes universitarios de
                    diferentes ingenierías. En este rol, ayudé a los estudiantes a comprender los conceptos
                    fundamentales de la programación y la resolución de problemas, y proporcioné apoyo en la
                    implementación de soluciones utilizando Python. Esta experiencia me permitió desarrollar habilidades
                    en la enseñanza y la comunicación efectiva, así como en la programación en Python.
                </p>
            </li>
            <li>
                <div class="triangle-list"></div>
                <div class="date">jul. 2020 - dic. 2020</div>
                <h3>Monitor Socieducativo</h3>
                <h4>Estrategia ASES - Universidad del Valle</h4>
                <p>
                    Desempeñé el rol de Monitor Socioeducativo, brindando acompañamiento académico y personal a
                    estudiantes de primeros semestres de Ingeniería de Sistemas. En este rol, ayudé a los estudiantes a
                    desarrollar habilidades efectivas de estudio y aprendizaje, fomenté la resolución de problemas y les
                    brindé asesoramiento en asuntos académicos y personales. Además, llevé a cabo un seguimiento semanal
                    de los estudiantes, brindándoles asesoramiento y retroalimentación en su proceso de adaptación
                    universitaria. También informaba a practicantes y profesionales sobre el progreso y las necesidades
                    de los estudiantes. Esta experiencia me permitió desarrollar habilidades en la gestión de relaciones
                    interpersonales, gestión del tiempo, la enseñanza y el liderazgo.
                </p>
            </li>
            <li>
                <div class="triangle-list"></div>
                <div class="date">sep. 2019 - may. 2020</div>
                <h3>Monitor de Sala de Cómputo</h3>
                <h4>EISC - Universidad del Valle</h4>
                <p>
                    Vigilé y controlé el uso de los equipos de la sala de cómputo de la Escuela de Ingeniería de
                    Sistemas y Computación. También di tutorías a estudiantes de distintas ingenierías que tenían clases
                    de Tecnología Informática y Algoritmia y Programación en mi sala de cómputo asignada. Eventualmente,
                    también solucioné problemas técnicos menores con los equipos de la sala.
                </p>
            </li>
            <li>
                <div class="triangle-list"></div>
                <div class="date">ago. 2015 - oct.2016</div>
                <h3>Practicante de mercadeo y soporte</h3>
                <h4>Compuservix LTDA</h4>
            </li>
        </ol>
    </section>
    <footer>
        @include('partials.footer')
    </footer>
    <script src="persistent_components.js"></script>
</body>

</html>