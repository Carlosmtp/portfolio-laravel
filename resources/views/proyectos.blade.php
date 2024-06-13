<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
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
        @foreach($proyectos as $proyecto)
        <div class="tarjeta">
            <img src="{{ $proyecto->imagen }}" alt="{{ $proyecto->nombre }}">
            <h2>{{ $proyecto->nombre }}</h2>
            <p>{{ $proyecto->descripcion }}</p>
            <a href="{{ $proyecto->url }}" class="boton" target="_blank">Ver Más</a>
        </div>
        @endforeach
    </section>
    <div id="pagination">
        {{ $proyectos->links('pagination::bootstrap-4') }}
    </div>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
