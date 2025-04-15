<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('styles')
<style>
    /* Colores de la temática azul */
    :root {
      --primary-color: #1a73e8;
      --primary-light: #e8f0fe;
      --primary-dark: #174ea6;
      --accent-color: #4285f4;
      --text-dark: #202124;
      --text-muted: #5f6368;
      --border-color: #dadce0;
    }

    /* Gradientes y estilos generales */
    .bg-gradient-primary {
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    }

    .card {
      border-radius: 12px;
      overflow: hidden;
      transition: all 0.3s ease;
      border: none;
      animation: fadeIn 0.5s ease-out forwards;
    }

    .card-header {
      border-bottom: none;
    }

    /* Estilos para inputs */
    .form-control {
      border-radius: 6px;
      border-color: var(--border-color);
      padding: 10px 12px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgb(26 115 232 / 25%);
    }

    .input-group-text {
      border-color: var(--border-color);
    }

    /* Estilos para botones */
    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-2px);
    }

    /* Estilos para checkbox */
    .form-check-input:checked {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    /* Estilos para links */
    a.text-primary {
      color: var(--primary-color) !important;
    }

    a.text-primary:hover {
      color: var(--primary-dark) !important;
    }

    /* Efectos de sombra */
    .shadow {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
    }

    .shadow-lg {
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12) !important;
    }

    /* Animación sutil al cargar */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-lg rounded-lg mt-5">
            <div class="card-header bg-gradient-primary text-white text-center py-3">
                <h4 class="mb-0"><i class="fas fa-user-lock me-2"></i>Iniciar Sesión</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label text-primary fw-bold">
                            <i class="fas fa-envelope me-2"></i>Correo Electrónico
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-primary"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="ejemplo@correo.com" required autofocus>
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label text-primary fw-bold">
                            <i class="fas fa-key me-2"></i>Contraseña
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-primary"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label text-secondary" for="remember">
                            <i class="fas fa-cookie me-1"></i>Recordarme
                        </label>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg shadow">
                            <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                        </button>
                    </div>
                </form>
                
                <div class="mt-4 text-center">
                    <p class="text-muted">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-decoration-none fw-bold text-primary">Regístrate <i class="fas fa-arrow-right ms-1"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
@endsection