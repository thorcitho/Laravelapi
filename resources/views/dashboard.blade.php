<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
<style>
    .dashboard-header {
        background: linear-gradient(135deg, #1a73e8, #174ea6);
        color: white;
        border-radius: 12px 12px 0 0;
        border: none;
        padding: 15px 20px;
    }
    
    .dashboard-welcome {
        background-color: #f8f9fa;
        border-left: 4px solid #1a73e8;
        padding: 15px;
        margin-bottom: 25px;
        border-radius: 0 8px 8px 0;
    }
    
    .feature-card {
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        overflow: hidden;
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
        font-size: 2.5rem;
        color: #1a73e8;
        margin-bottom: 15px;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #1a73e8, #174ea6);
        border: none;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(26, 115, 232, 0.4);
    }
    
    .dashboard-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }
</style>
@endsection

@section('content')
<div class="dashboard-card card animated-content">
    <div class="dashboard-header card-header">
        <h4 class="mb-0"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h4>
    </div>
    <div class="card-body">
        <div class="dashboard-welcome mb-4">
            <h5 class="card-title"><i class="fas fa-hand-wave me-2"></i>¡Bienvenido, {{ Auth::user()->name }}!</h5>
            <p class="card-text mb-0">Has iniciado sesión correctamente en la aplicación. Desde aquí puedes acceder a todas las funcionalidades.</p>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="feature-card card mb-4">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h5 class="card-title">Gestión de Personas</h5>
                        <p class="card-text">Administra el catálogo de personas en el sistema de manera fácil y eficiente.</p>
                        <a href="{{ route('personas.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Ir a Personas
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card card mb-4">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="card-title">Estadísticas</h5>
                        <p class="card-text">Visualiza datos y métricas importantes sobre la actividad del sistema.</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Ver Estadísticas
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card card mb-4">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h5 class="card-title">Configuración</h5>
                        <p class="card-text">Personaliza los ajustes de tu cuenta y las preferencias del sistema.</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-arrow-right me-2"></i>Configurar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-3 p-3 bg-light rounded">
            <h6 class="text-primary"><i class="fas fa-bell me-2"></i>Actividad Reciente</h6>
            <hr>
            <p class="text-muted small mb-0">No hay actividad reciente para mostrar.</p>
        </div>
    </div>
</div>
@endsection