@extends('layouts.app')

@section('title', 'Editar Persona')

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
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-label {
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #2a5298;
        display: block;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 0.6rem 0.8rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .form-control:focus {
        border-color: #2a5298;
        box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.25);
    }
    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
        display: block;
        margin-top: 0.25rem;
    }
    .is-invalid {
        border-color: #dc3545;
    }
    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #e9ecef;
        padding: 1.2rem 1.5rem;
        border-radius: 0 0 8px 8px;
    }
</style>
@endsection

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h1 class="h4 mb-0"><i class="fas fa-user-edit me-2"></i> Editar Persona</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('personas.update', $persona->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre" class="form-label"><i class="fas fa-user me-2"></i>Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $persona->nombre) }}">
                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="apellido" class="form-label"><i class="fas fa-user-tag me-2"></i>Apellido</label>
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido', $persona->apellido) }}">
                        @error('apellido')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $persona->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-12 text-end">
                    <a href="{{ route('personas.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection