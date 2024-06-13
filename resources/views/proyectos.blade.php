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
    <header id="pages-header">
        @include('partials.header')
    </header>
    <section id="proyectos">
        <div class="tarjeta">
            <img src="img/smart-mandalorian.png" alt="Smart Mandalorian">
            <h2>Smart Mandalorian</h2>
            <p>Smart Mandalorian es un proyecto de inteligencia artificial donde Mando busca a Grogu en un mundo de
                10x10 casillas, utilizando algoritmos de búsqueda para evitar enemigos mientras optimiza el uso de una
                nave espacial. Este repositorio proporciona una aplicación interactiva para elegir el mundo del agente y
                visualizar los resultados.</p>
            <a href="https://github.com/Carlosmtp/Smart-Mandalorian" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/sistema-ases.png" alt="Sistema de Información ASES">
            <h2>Sistema de Información ASES</h2>
            <p>Despliegue, devops e infraestructura del nuevo Sistema de
                Información de la estrategia ASES, Universidad del Valle.
                También se han desarrollado funcionalidades y módulos
                según los requerimientos</p>
            <a href="https://ases.univalle.edu.co/noticias-ases/226-ases-presenta-su-nuevo-sistema-de-informacion-2"
                class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/sgi.png" alt="Sistema de Gestión Integral - DOMUZ Consultoría">
            <h2>Sistema de Gestión Integral - DOMUZ Consultoría</h2>
            <p>Con SGI Domuz se centraliza la información de los indicadores de los procesos de la compañía para
                realizarles un seguimiento más preciso y menos propenso a errores además de brindar una serie de
                herramientas para la gestión (CRUD) de usuarios, proyectos y procesos llevados a cabo en la empresa.</p>
            <a href="https://github.com/Carlosmtp/DomuzSGI" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/cvid.png" alt="C-vid">
            <h2>C-vid</h2>
            <p>C-VID es un lenguaje de programación (no tipado) con ciertas características de lenguaje de programación
                declarativo e imperativo creado en el curso de FLP durante la pandemia del COVID-19</p>
            <a href="https://github.com/Carlosmtp/c-vid" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/greedydinamic.png" alt="Greedy VS Dynamc">
            <h2>Optimización de Copia de Libros</h2>
            <p>Implementaciones de algoritmos voraz y dinámico para optimizar la copia de libros entre múltiples
                escritores.</p>
            <a href="https://github.com/Carlosmtp/Book-Copy-Greedy-vs-Dynamic" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/zoologico.png" alt="Greedy VS Dynamc">
            <h2>Espectáculo en el Zoologico</h2>
            <p>Encuentra el mejor espectaculo de animales en el menor tiempo posible. Se exploraron diversas estructuras
                de datos y algoritmos con el propósito de solucionar problema de manera eficiente.</p>
            <a href="https://github.com/Carlosmtp/proyecto-ada" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/companiaelectrica.png" alt="Compañia Servicio Eléctrico">
            <h2>Compañía servicio Eléctrico</h2>
            <p>Sistema para una empresa proveedora de energía eléctrica, que permite gestionar la información de sus
                clientes (corporativos o naturales) y su consumo, para realizar el cálculo de las liquidaciones de cada
                mes con la posibilidad de agregar intereses por mora, generar facturas, realizar los pagos y además,
                gestionar la información de los activos de la empresa.</p>
            <a href="https://github.com/Jorgemayor/CompaniaServicioElectrico" class="boton" target="_blank">Ver Más</a>
        </div>
        <div class="tarjeta">
            <img src="img/fuchicovid.png" alt="Fuchicovid">
            <h2>Fuchicovid</h2>
            <p>FuchiCOVID, Es un emprendimiento para registro y seguimiento de los pacientes que se encuentran
                diagnosticados con el virus del COVID 19. Con el fin de cuidar de ti y de tu familia, hemos desarrollado
                esta herramienta en la que puede llevar registro de los pacientes que atiende, junto con informes y los
                datos de las personas que viven con ellos. Puede acceder como funcionario para registrar nuevos
                pacientes y doctores o como doctor para ver la informacion de los pacientes bajo su cargo y ordenar
                medicamentos.</p>
            <a href="https://github.com/SebastianBetancourt/fuchicovid" class="boton" target="_blank">Ver Más</a>
        </div>
    </section>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>