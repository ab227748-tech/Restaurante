@extends('layout.adminmain')

@section('titulo')
    Administracion
@endsection

@section('contenido')
    <div class="container py-4 py-lg-5">
    
    <!-- Encabezado de Gestión -->
    <header class="mb-5">
      <div class="d-flex align-items-center gap-2 mb-2">
        <span class="sub-header text-uppercase">Cosecha de hoy &amp; cocina</span>
        <span class="dot-lime"></span>
        <span class="season-label">Temporada Primavera 2025</span>
      </div>

      <div class="row align-items-end justify-content-between g-4">
        <div class="col-lg-7">
          <h1 class="main-title font-serif mb-3">Gestión del Menú &amp;<br>Pedidos</h1>
          <p class="header-desc text-muted mb-0">
            Control botánico de insumos, disponibilidad en tiempo real para salón y pedidos en línea con sincronización de productores locales.
          </p>
        </div>
        <div class="col-lg-auto">
          <button type="button" class="btn btn-lime rounded-pill px-4 py-3 fw-semibold d-inline-flex align-items-center gap-2">
            <i class="bi bi-plus-lg"></i> Agregar Nuevo Producto
          </button>
        </div>
      </div>
    </header>

    <!-- Tarjetas de KPI / Estadísticas -->
    <section class="kpi-section mb-5">
      <div class="row g-4">
        
        <!-- KPI 1: Pedidos del día -->
        <div class="col-md-6 col-lg-4">
          <div class="kpi-card p-4 rounded-5 h-100 d-flex flex-column justify-content-between">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="kpi-label text-uppercase fw-semibold">Pedidos del día</span>
              <div class="kpi-icon-circle icon-soft-green">
                <i class="bi bi-cup-hot"></i>
              </div>
            </div>
            <div>
              <div class="kpi-value font-serif mb-1">42</div>
              <div class="kpi-sub small text-muted">
                <strong class="text-dark">&uarr;+18%</strong> vs. día anterior
              </div>
            </div>
          </div>
        </div>

        <!-- KPI 2: Ventas totales (Destacado) -->
        <div class="col-md-6 col-lg-4">
          <div class="kpi-card kpi-card-highlight p-4 rounded-5 h-100 d-flex flex-column justify-content-between">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="kpi-label text-uppercase fw-semibold text-dark">Ventas totales</span>
              <div class="kpi-icon-circle icon-dark-green">
                <i class="bi bi-cash-stack"></i>
              </div>
            </div>
            <div>
              <div class="kpi-value font-serif mb-1">&euro; 2.840<span class="kpi-decimals">,50</span></div>
              <div class="kpi-sub small text-muted">
                Ticket medio: <strong class="text-dark">&euro; 67,60</strong>
              </div>
            </div>
          </div>
        </div>

        <!-- KPI 3: Productos activos -->
        <div class="col-md-6 col-lg-4">
          <div class="kpi-card p-4 rounded-5 h-100 d-flex flex-column justify-content-between">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="kpi-label text-uppercase fw-semibold">Productos activos</span>
              <div class="kpi-icon-circle icon-light">
                <!-- Icono de hoja SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                  <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                </svg>
              </div>
            </div>
            <div>
              <div class="kpi-value font-serif mb-1">28 <span class="fw-normal text-muted">/</span> 32</div>
              <div class="kpi-sub small text-muted d-flex align-items-center gap-2">
                <span class="status-dot-lime"></span> 4 platos marcados agotados
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </div>
@endsection