@extends('layout.main')

@section('contenido')
    <!-- Contenedor Principal -->
    <div class="login-wrapper">
        <div class="split-login-card">
            <!-- Columna Derecha -->
            <section class="login-form-panel">
                <div class="form-heading">
                    <h2 class="form-title">Iniciar sesión</h2>
                    <p class="form-subtitle">Ingresa tus credenciales para administrar las citas del día</p>
                </div>
                <form action="{{ url('/login/admin') }}" method="POST">
                    @csrf
                    <div class="mb-3 pb-1">
                        <label for="adminEmail" class="form-label-custom">Correo Electrónico</label>
                        <div class="input-icon-wrapper">
                            <span class="input-prefix-icon">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email"
                                class="custom-input" id="adminEmail"
                                placeholder="admin@ejemplo.com"
                                autofocus>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="adminPassword" class="form-label-custom mb-0">Contraseña</label>
                            <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="input-icon-wrapper">
                            <span class="input-prefix-icon">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="password"
                                class="custom-input with-toggle" id="adminPassword"
                                placeholder="••••••••••••" required autocomplete="current-password">
                            <button type="button" class="toggle-password-btn" id="togglePasswordBtn"
                                title="Mostrar/ocultar contraseña" aria-label="Mostrar u ocultar contraseña">
                                <i class="bi bi-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit-login">
                        <i class="bi bi-box-arrow-in-right" style="font-size: 1.15rem;"></i>
                        <span>Iniciar Sesión</span>
                    </button>
                </form>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/login.js')
@endpush
