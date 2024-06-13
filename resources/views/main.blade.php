<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap');
    </style>
    <title>Carlos Tovar</title>
</head>

<body>
    <header id="index-header">
        @include('partials.header')
    </header>
    <section id="banner">
        <div class="contenido-banner">
            <h3>
                <span>Hola Mundo:</span><br>

                soy <b>Carlos Tovar</b>,<br>
                un ingeniero de sistemas en constante búsqueda de nuevos desafíos.
            </h3>
            <a href="acerca.html" class="boton-banner">
                <span class="material-symbols-outlined" style="overflow: hidden;">badge</span>
                <p>Más acerca de mí</p>
            </a>
        </div>
    </section>
    <section id="habilidades">
        <div class="contenido-habilidades">
            <div class="tarjeta">
                <span class="material-symbols-outlined" style="overflow: hidden;">code</span>
                <h2>Codificación</h2>
                <p>Experiencia en programación y resolución eficiente de problemas mediante el desarrollo de software.
                </p>
            </div>
            <div class="tarjeta">
                <span class="material-symbols-outlined" style="overflow: hidden;">dns</span>
                <h2>Gestión</h2>
                <p>Capacidad para administrar sistemas, proporcionar soporte técnico y gestionar proyectos
                    eficientemente.</p>
            </div>
            <div class="tarjeta">
                <span class="material-symbols-outlined" style="overflow: hidden;">groups</span>
                <h2>Liderazgo</h2>
                <p>Experiencia en liderazgo, trabajo en equipo y motivación en proyectos desafiantes.</p>
            </div>
            <div class="tarjeta" id="icono-final">
                <span class="material-symbols-outlined" style="overflow: hidden;">terminal</span>
                <h2>Sistemas</h2>
                <p>Conocimientos en diseño, implementación y optimización de sistemas, resolución de problemas en
                    entornos tecnológicos.</p>
            </div>
        </div>
    </section>
    <section id="testimonios">
        <h2>Algunos Testimonios</h2>
        <div class="testimonios-container">
            <div class="testimonio">
                <img src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h4>Ana Sánchez</h4>
                <h5>Coordinadora Académica</h5>
                <p>Un líder natural con una pasión evidente por ayudar a otros a alcanzar su máximo potencial. Su
                    dedicación y compromiso son inspiradores.</p>
            </div>
            <div class="testimonio">
                <img src="https://plus.unsplash.com/premium_photo-1689539137236-b68e436248de?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h4>Pedro Díaz</h4>
                <h5>Profesor de Ingeniería de Sistemas</h5>
                <p>Impresiona con su habilidad para comprender y comunicar conceptos complejos de manera clara y
                    concisa. Es una adición invaluable a cualquier equipo.</p>
            </div>
            <div class="testimonio">
                <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h4>Laura Gómez</h4>
                <h5>Compañera de Equipo</h5>
                <p>Su experiencia técnica y capacidad para liderar y motivar al equipo fueron fundamentales para el
                    éxito del proyecto. Siempre está dispuesto a ir más allá para alcanzar los objetivos del equipo.</p>
            </div>
        </div>
    </section>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>