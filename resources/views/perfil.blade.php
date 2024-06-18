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
            @foreach ($experiencias as $experiencia)
            <li>
                <div class="triangle-list"></div>
                <div class="date">{{ date('M Y', strtotime($experiencia->fecha_inicio)) }} - {{ $experiencia->fecha_fin ? date('M Y', strtotime($experiencia->fecha_fin)) : 'Actualidad' }}</div>
                <h3>{{ $experiencia->puesto }}</h3>
                <h4>{{ $experiencia->empresa }}</h4>
                <p>
                    {{ $experiencia->descripcion }}
                </p>
            </li>
            @endforeach
        </ol>
    </section>
    <footer>
        @include('partials.footer')
    </footer>
    <script src="persistent_components.js"></script>
</body>

</html>