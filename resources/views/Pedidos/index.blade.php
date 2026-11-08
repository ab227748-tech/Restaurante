@extends('layout.main')

@section('titulo')
    Avelos - Pedidos
@endsection

@section('contenido')
    <div class="container py-4 py-lg-5">

        <!-- Encabezado Principal -->
        <header class="header-section mb-4">
            <span class="sub-header text-uppercase d-block mb-2">Nuestro Menú</span>
            <h1 class="main-title font-serif mb-3">Menú & Pedidos en Línea</h1>

            <!-- Filtros de Categorías -->
            <div class="category-filters d-flex flex-wrap gap-2 pt-2">
                <button type="button" class="btn btn-filter active">Todos</button>
                @foreach ($categorias as $categoria)
                    <button type="button" class="btn btn-filter">{{ $categoria->nombrecategoria }}</button>
                @endforeach
            </div>
        </header>

        <!-- Contenido: Lista de Productos y Panel de Pedido -->
        <div class="row g-4 align-items-start">

            <!-- Columna Catálogo (2 columnas de cards) -->
            <main class="col-lg-8">
                <div class="row g-4">

                    <!-- Producto dinámicos -->
                    @foreach ($productos as $item)
                        <div class="col-md-6">
                            <article class="card-dish d-flex flex-column h-100" data-product-card
                                data-product-id="{{ $item->id }}" data-product-name="{{ $item->nombre }}"
                                data-product-description="{{ $item->descripcion }}"
                                data-product-price="{{ $item->precio }}">
                                <div class="dish-media position-relative rounded-4 overflow-hidden mb-3">
                                    <span class="badge-local position-absolute">{{ $item->categoria->nombrecategoria }}</span>
                                    <img src="/imagenes/{{ $item->imagen }}" alt="{{ $item->nombre }}"
                                        class="img-fluid w-100 object-fit-cover">
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h2 class="dish-name h6 fw-semibold mb-0 pe-2">{{ $item->nombre }}</h2>
                                    <span class="dish-price fw-bold text-nowrap">${{ number_format($item->precio, 2) }}
                                        MXN</span>
                                </div>
                                <p class="dish-text text-muted small flex-grow-1 mb-3">
                                    {{ $item->descripcion }}
                                </p>
                                <div class="dish-actions d-flex gap-2 align-items-center">
                                    <div
                                        class="quantity-control d-flex align-items-center justify-content-between rounded-pill px-3 py-1">
                                        <button type="button" class="qty-btn" data-quantity-action="decrease"
                                            aria-label="Disminuir">-</button>
                                        <span class="qty-val fw-medium px-2" aria-live="polite">1</span>
                                        <button type="button" class="qty-btn" data-quantity-action="increase"
                                            aria-label="Aumentar">+</button>
                                    </div>
                                    <button type="button"
                                        class="btn btn-add rounded-pill flex-grow-1 d-flex align-items-center justify-content-center gap-2"
                                        data-add-to-order>
                                        <i class="bi bi-cart-plus"></i> Añadir
                                    </button>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </main>

            <!-- Columna Lateral: Resumen de Pedido -->
            <aside class="col-lg-4">
                <div class="order-summary-card p-4 rounded-4 shadow-xs sticky-top">

                    <!-- Encabezado del carrito -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="h5 mb-0 fw-semibold d-flex align-items-center gap-2">
                            <i class="bi bi-basket"></i> Tu Pedido
                        </h2>
                        <span class="text-muted small" data-cart-count aria-live="polite">0 artículos</span>
                    </div>

                    <!-- Lista de Items en el carrito -->
                    <div class="order-items-list mb-4" data-order-items aria-live="polite">
                        <p class="text-muted small mb-0" data-empty-cart>Tu pedido está vacío.</p>
                    </div>

                    <!-- Banner Eco Compostable -->
                    <div class="eco-callout p-3 rounded-3 mb-4 d-flex align-items-start">
                        <textarea id="review" name="review" rows="4" cols="50" placeholder="Escriba algo extra a su pedido"></textarea>
                    </div>

                    <!-- Total Final -->
                    <div class="d-flex justify-content-between align-items-baseline mb-4">
                        <span class="fw-bold fs-6">Total</span>
                        <span class="total-amount font-serif fw-bold" data-total>$0.00 MXN</span>
                    </div>

                    <!-- Botón de Confirmación -->
                    <button type="button"
                        class="btn btn-confirm w-100 rounded-pill py-3 fw-semibold mb-3 d-flex align-items-center justify-content-center gap-2">
                        Confirmar Pedido <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </aside>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/pedidos.js')
@endpush
