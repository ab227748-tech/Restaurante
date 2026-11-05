<nav class="navbar navbar-expand-md custom-navbar sticky-top">
  <div class="container-fluid px-lg-5 px-3">
    
    <!-- Logo de marca -->
    <a href="{{ url('/') }}" class="brand-logo">
      <i class="bi bi-scissors brand-icon"></i>
      <span>IMPERIUM <small style="font-size: 0.75rem; letter-spacing: 0.2em; font-weight: 500; opacity: 0.85;">BARBERSHOP</small></span>
    </a>

    <!-- Botón Hamburguesa para celulares -->
    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-1 text-gold"></i>
    </button>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarContenido">
      
      <!-- Enlaces de navegación -->
      <div class="navbar-nav mx-auto align-items-center gap-5 my-3 my-md-3">

        <a href="{{ url('/#galeria') }}" class="nav-link-custom">Sobre Nosotros</a>
        <a href="{{ url('/#galeria') }}" class="nav-link-custom">Comidas Especiales</a>
      </div>


      <!-- Boton Acceso Admin -->
      <div class="text-center text-md-end">
        <a href="/login" class="button btn btn-outline-gold d-flex align-items-center gap-2">
          <i class="bi bi-bag-check-fill"></i>
          <span>Ordene Ahora</span>
        </a>
      </div>

    </div>

  </div>
</nav>