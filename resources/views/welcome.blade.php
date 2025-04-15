<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Bienvenido')

@section('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #1a73e8, #174ea6);
        color: white;
        border-radius: 15px;
        padding: 3rem;
        margin-bottom: 3rem;
        box-shadow: 0 10px 30px rgba(26, 115, 232, 0.3);
    }
    
    .hero-title {
        font-weight: 700;
        margin-bottom: 1.5rem;
    }
    
    .hero-subtitle {
        font-weight: 300;
        margin-bottom: 2rem;
        font-size: 1.25rem;
    }
    
    .hero-divider {
        background-color: rgba(255, 255, 255, 0.3);
        height: 1px;
    }
    
    .feature-card {
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .feature-card .card-title {
        color: #1a73e8;
        font-weight: 600;
    }
    
    .feature-icon {
        font-size: 3rem;
        color: #1a73e8;
        margin-bottom: 1rem;
    }
    
    .btn-hero-primary {
        background-color: white;
        color: #1a73e8;
        font-weight: 600;
        padding: 12px 25px;
        border-radius: 30px;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .btn-hero-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        background-color: #f8f9fa;
        color: #174ea6;
    }
    
    .btn-hero-outline {
        background-color: transparent;
        color: white;
        font-weight: 600;
        padding: 12px 25px;
        border-radius: 30px;
        transition: all 0.3s ease;
        border: 2px solid white;
    }
    
    .btn-hero-outline:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        color: white;
    }
    
    .wave-bottom {
        position: relative;
        height: 70px;
        margin-top: -70px;
        background: transparent;
    }
    
    .tech-section {
        padding: 3rem 0;
        background-color: #f8f9fa;
        border-radius: 15px;
        margin-top: 3rem;
    }
    
    .tech-icon {
        font-size: 2.5rem;
        color: #1a73e8;
        margin-bottom: 15px;
    }
</style>
@endsection

@section('content')
<div class="hero-section text-center animated-content">
    <div class="container">
        <h1 class="hero-title display-4">Laravel CRUD App</h1>
        <p class="hero-subtitle">Una aplicación moderna para gestionar información de manera eficiente y segura</p>
        <hr class="hero-divider my-4">
        <p class="mb-4">Esta aplicación le permite gestionar un catálogo de personas con operaciones básicas de creación, lectura, actualización y eliminación.</p>
        <div class="d-flex justify-content-center gap-4">
            @guest
                <a class="btn btn-hero-primary btn-lg" href="{{ route('login') }}" role="button">
                    <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                </a>
                <a class="btn btn-hero-outline btn-lg" href="{{ route('register') }}" role="button">
                    <i class="fas fa-user-plus me-2"></i>Registrarse
                </a>
            @else
                <a class="btn btn-hero-primary btn-lg" href="{{ route('dashboard') }}" role="button">
                    <i class="fas fa-tachometer-alt me-2"></i>Ir al Dashboard
                </a>
            @endguest
        </div>
    </div>
</div>

<div class="row mt-5 g-4">
    <div class="col-md-4">
        <div class="feature-card card h-100">
            <div class="card-body text-center p-4">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="card-title">Gestión de Personas</h3>
                <p class="card-text">Administra fácilmente el catálogo de personas con todas las operaciones CRUD. Añade, modifica, consulta y elimina registros de manera sencilla.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="feature-card card h-100">
            <div class="card-body text-center p-4">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="card-title">Autenticación Segura</h3>
                <p class="card-text">Sistema de autenticación integrado para proteger tus datos y operaciones. Mantén tus registros seguros con nuestro sistema de acceso protegido.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="feature-card card h-100">
            <div class="card-body text-center p-4">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="card-title">API REST</h3>
                <p class="card-text">API completamente funcional para integrar con aplicaciones frontend modernas. Conecta fácilmente con tus proyectos externos usando nuestra API.</p>
            </div>
        </div>
    </div>
</div>

<div class="tech-section mt-5 p-4 text-center">
    <h3 class="text-primary mb-4">Tecnologías Utilizadas</h3>
    <div class="row g-4">
        <div class="col">
            <div class="tech-icon">
                <i class="fab fa-laravel"></i>
            </div>
            <h5>Laravel</h5>
        </div>
        <div class="col">
            <div class="tech-icon">
                <i class="fab fa-bootstrap"></i>
            </div>
            <h5>Bootstrap</h5>
        </div>
        <div class="col">
            <div class="tech-icon">
                <i class="fas fa-database"></i>
            </div>
            <h5>MySQL</h5>
        </div>
        <div class="col">
            <div class="tech-icon">
                <i class="fab fa-js"></i>
            </div>
            <h5>JavaScript</h5>
        </div>
        <div class="col">
            <div class="tech-icon">
                <i class="fab fa-html5"></i>
            </div>
            <h5>HTML5</h5>
        </div>
    </div>
</div>
@endsection