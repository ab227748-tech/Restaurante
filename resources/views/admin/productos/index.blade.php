@extends('layout.adminmain')

@section('titulo')
    Mis Productos
@endsection

@section('contenido')
    <div class="container py-4 py-lg-5">

        <!-- Sección Inventario de Platos -->
        <section class="inventory-section">

            <!-- Encabezado y Filtros -->
            <div
                class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-4 pb-4 mb-4 border-bottom-soft">
                <div>
                    <h2 class="section-title font-serif mb-2">Inventario de Platos de<br>Temporada</h2>
                    <p class="header-desc text-muted mb-0">Disponibilidad en vivo de cocina y carta de vinos ecológicos</p>
                </div>

                <div class="category-filters d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-filter active">Todos (32)</button>
                    @foreach ($categorias as $item)
                        <button type="button" class="btn btn-filter">{{$item->nombrecategoria}}</button>
                    @endforeach
                </div>
            </div>

            <!-- Contenedor de Tabla Redondeada -->
            <div class="inventory-card overflow-hidden">
                <div class="table-responsive">
                    <table class="table inventory-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="ps-4">Plato </th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Precio</th>
                                <th scope="col" class="pe-4">Disponibilidad</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($productos as $item)
                                <!-- Fila dinamicas-->
                                <tr>
                                    <td class="ps-4 py-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-dish position-relative">
                                                <img src="/imagenes/{{$item->imagen}}"
                                                    alt="Risotto de Setas Silvestres">
                                            </div>
                                            <div class="dish-info">
                                                <h3 class="h6 fw-bold mb-1 text-dark">{{$item->nombre}}</h3>
                                                <p class="text-muted small mb-0 text-truncate dish-subtitle">
                                                   {{$item->descripcion}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted">{{$item->categoria->nombrecategoria}}</td>
                                    <td class="fw-bold fs-6 text-dark">{{number_format($item->precio,2)}}</td>
                                    <td class="pe-4">
                                        <span class="status-pill status-available">
                                            <span class="status-dot">
                                            @if ($item->activo)
                                                </span> Disponible</span>
                                            @else
                                                </span> No disponible</span>
                                            @endif
                                        
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- Pie de Tabla / Paginación -->
                <div
                    class="inventory-footer d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 px-4 py-3">
                    <span class="text-muted small">Mostrando 4 de 32 preparaciones</span>

                    <nav aria-label="Paginación de inventario">
                        <ul class="pagination-custom list-unstyled d-flex align-items-center gap-2 mb-0">
                            <li><a href="#" class="page-btn page-nav">Anterior</a></li>
                            <li><a href="#" class="page-btn page-num active">1</a></li>
                            <li><a href="#" class="page-btn page-num">2</a></li>
                            <li><a href="#" class="page-btn page-nav">Siguiente</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </section>

    </div>
@endsection
