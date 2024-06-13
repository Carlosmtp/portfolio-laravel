
<a href="{{ route('main') }}" class="logo-container">
    <img src="img/profile-picture.jpg" id="foto-perfil" alt = "Carlos Tovar">
    <h2 class="logo">Carlos Tovar</h2>
</a>
<input type="checkbox" id="check">
<label for="check" class="mostrar-menu">&#8801;</label>
<nav class="menu">
    <a href="{{ route('main') }}">Inicio</a>
    <a href="{{ route('proyectos-view') }}">Proyectos</a>
    <a href="{{ route('perfil') }}">Perfil</a>
    <a href="{{ route('contacto') }}">Contacto</a>
    <label for="check" class="esconder-menu">&#215;</label>
</nav>