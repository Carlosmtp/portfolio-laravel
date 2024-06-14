<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
    <header>
        @include('partials.header')
    </header>
    <section id="proyectos">
        <div class="tarjeta">
            <div class="medio-contacto">
                <iconify-icon icon="bi:linkedin"></iconify-icon>
                <p>LinkedIn</p>
            </div>
            <a class="boton" href="https://www.linkedin.com/in/carlosmtp/" target="_blank">@carlosmtp</a>
        </div>
        <div class="tarjeta">
            <div class="medio-contacto">
                <iconify-icon icon="bi:twitter-x" class="footicon"></iconify-icon>
                <p>X (Twitter)</p>
            </div>
            <a class="boton" href="https://twitter.com/carlost__tovar/" target="_blank">@carlost__tovar</a>
        </div>
        <div class="tarjeta">
            <div class="medio-contacto">
                <iconify-icon icon="bi:instagram"></iconify-icon>
                <p>Instagram</p>
            </div>
            <a class="boton" href="https://www.instagram.com/carlost__t/" target="_blank">@carlost__t</a>
        </div>
        <div class="tarjeta">
            <div class="medio-contacto">
                <iconify-icon icon="bi:telegram"></iconify-icon>
                <p>Telegram</p>
            </div>
            <a class="boton" href="https://t.me/carlost_tovar" target="_blank">@carlost_tovar</a>
        </div>
    </section>
    <section id="contacto">
        <h4>O envíame un correo electrónico:</h4>
        <form id="formulario-contacto" class="form" action="{{ route('enviar.correo') }}" method="POST">
            @csrf
            <div class="datos-form">
                <div class="nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
            </div>
            <div class="mensaje">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" class="boton">Enviar mensaje</button>
        </form>
    </section>
    <div id="spinner-container" style="display:none;">
        <div id="spinner"></div>
    </div>
    <div id="respuesta-modal" style="display:none;">
        <iconify-icon icon="material-symbols:close" id="cerrar-modal"></iconify-icon>
        <p id="respuesta"></p>
    </div>
    <footer>
        @include('partials.footer')
    </footer>

    <script>
        document.getElementById('formulario-contacto').addEventListener('submit', function (event) {
            event.preventDefault(); // Evitar el envío tradicional del formulario

            // Mostrar el spinner mientras se procesa la solicitud
            document.getElementById('spinner-container').style.display = 'block';
            document.body.classList.add("body-back");

            // Obtener los datos del formulario
            let formData = new FormData(this);

            // Enviar la solicitud usando Fetch API
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Ocultar el spinner
                document.getElementById('spinner-container').style.display = 'none';
                document.getElementById('formulario-contacto').reset();
                document.body.classList.remove("body-back");
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>

</html>
