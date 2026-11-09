<nav class="navbar navbar-expand-md custom-navbar sticky-top">
    <div class="container-fluid px-lg-5 px-3">

        <!-- Logo de marca -->
        <a href="{{ url('/') }}" class="brand-logo">
            <i class="bi bi-scissors brand-icon"></i>
            <span>AVELOS </span>
        </a>

        <!-- Botón Hamburguesa para celulares -->
        <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-1 text-gold"></i>
        </button>

        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarContenido">

            <!-- Enlaces de navegación -->
            <div class="navbar-nav mx-auto align-items-center gap-5 my-3 my-md-3">

                <a href="{{ url('/#galeria') }}" class="nav-link-custom">Sobre Nosotros</a>
                <a href="{{ url('/#galeria') }}" class="nav-link-custom">Comidas Especiales</a>
            </div>

            <!-- Default dropstart button -->
            <div class="text-center text-md-end">
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="/login"   class="dropdown-item" >Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    </div>
</nav>
