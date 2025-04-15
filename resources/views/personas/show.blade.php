@extends('layouts.app')

@section('title', 'Detalles de Persona')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        margin-bottom: 2rem;
        border: none;
        background: #fff;
    }
    .card-header {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        border-radius: 8px 8px 0 0 !important;
        padding: 1.2rem 1.5rem;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .btn-primary {
        background: #2a5298;
        border-color: #2a5298;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .btn-primary:hover {
        background: #1e3c72;
        border-color: #1e3c72;
    }
    .btn-secondary {
        background: #6c757d;
        border-color: #6c757d;
    }
    .btn-danger {
        background: #dc3545;
        border-color: #dc3545;
    }
    .btn {
        border-radius: 5px;
        padding: 0.5rem 1rem;
        font-weight: 500;
        margin-right: 0.5rem;
        display: inline-flex;
        align-items: center;
    }
    .btn i {
        margin-right: 0.4rem;
    }
    .data-label {
        font-weight: bold;
        color: #2a5298;
        margin-bottom: 0.25rem;
    }
    .data-value {
        margin-bottom: 1rem;
        color: #333;
    }
    .persona-detail {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #eee;
    }
    .persona-detail:last-child {
        border-bottom: none;
    }
    .alert {
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
    }
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }
    table {
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    table thead th {
        background-color: #f8f9fa;
        color: #2a5298;
        border-bottom: 2px solid #dee2e6;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 0.6rem 0.8rem;
    }
    .form-control:focus {
        border-color: #2a5298;
        box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.25);
    }
    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
    }
    .action-buttons {
        display: flex;
        gap: 5px;
    }
</style>
@endsection

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h1 class="h4 mb-0"><i class="fas fa-user-circle me-2"></i> Detalles de Persona</h1>
            <div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver
                </a>
                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Editar
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-id-card me-2"></i>ID:</div>
                        <div class="data-value">{{ $persona->id }}</div>
                    </div>

                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-user me-2"></i>Nombre:</div>
                        <div class="data-value">{{ $persona->nombre }}</div>
                    </div>

                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-user-tag me-2"></i>Apellido:</div>
                        <div class="data-value">{{ $persona->apellido }}</div>
                    </div>

                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-envelope me-2"></i>Email:</div>
                        <div class="data-value">{{ $persona->email }}</div>
                    </div>

                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-calendar-plus me-2"></i>Fecha de creación:</div>
                        <div class="data-value">{{ $persona->created_at->format('d/m/Y H:i:s') }}</div>
                    </div>

                    <div class="persona-detail">
                        <div class="data-label"><i class="fas fa-calendar-check me-2"></i>Última actualización:</div>
                        <div class="data-value">{{ $persona->updated_at->format('d/m/Y H:i:s') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-center">
            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar esta persona?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Eliminar Persona
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection