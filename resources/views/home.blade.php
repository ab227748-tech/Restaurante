@extends('layout.main')

@section('titulo')
    Avelos - Inicio
@endsection

@section('contenido')
    <div class="container py-5">
        <!-- Hero Section -->
        <section class="hero-section mb-5 pb-lg-4">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">
                    <div class="badge-custom mb-4">
                        <span class="badge-dot"></span>
                        Quienes Somos
                    </div>

                    <h1 class="font-serif hero-title mb-4">Cosechado hoy, en tu mesa en minutos</h1>

                    <p class="hero-desc text-muted mb-4 pb-2">
                        Ingredientes puros cultivados a menos de 40 kilómetros por agricultores locales que cuidan la
                        tierra. Una propuesta botánica, orgánica y honesta concebida en sintonía con las estaciones.
                    </p>

                    <div class="d-flex justify-content-center gap-3 mb-5">
                        <a href="#" class="btn btn-lime rounded-pill px-4 py-2 btn-lg">Ordenar ahora</a>
                    </div>

                    <div class="row pt-4 border-top g-4">
                        <div class="col-auto me-md-4">
                            <div class="metric-num">0 km</div>
                            <div class="metric-label text-muted small">Semillas híbridas nativas</div>
                        </div>
                        <div class="col-auto">
                            <div class="metric-num">24h</div>
                            <div class="metric-label text-muted small">Del bancal a cocina</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-card position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=1200&q=80"
                            alt="Alcachofas bretonas al vapor" class="img-fluid w-100 object-fit-cover">
                    </div>
                </div>

            </div>
        </section>

        <!-- Especialidades Section -->
        <section class="specialties-section pt-4" style="background-color: #f8f9fa;">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
                <div>
                    <span class="section-badge text-uppercase text-muted fw-semibold small d-block mb-2">Recomendaciones</span>
                    <h2 class="font-serif section-title mb-0">Especialidades de la casa</h2>
                </div>
                <p class="section-desc text-muted mb-0">
                    Recetas desarrolladas a diario por nuestro equipo culinario a partir de los brotes y vegetales
                    recolectados a primera hora.
                </p>
            </div>

            <div class="row g-4 mb-5">
                @foreach ($vistaprincipal as $producto)
                    <div class="col-md-6 col-lg-4">
                        <article class="h-100 d-flex flex-column">
                            <div class="dish-thumb position-relative rounded-4 overflow-hidden mb-3">
                                <img src="/imagenes/{{ $producto->imagen }}" alt="{{ $producto->nombre }}"
                                    class="img-fluid w-100 object-fit-cover">
                            </div>
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h3 class="dish-title h6 fw-semibold mb-0 pe-2">{{ $producto->nombre }}</h3>
                                <span class="dish-price fw-bold text-nowrap">{{ $producto->precio }} mxn</span>
                            </div>
                            <p class="text-muted small mb-0">
                                {{ $producto->descripcion }}
                            </p>
                        </article>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
