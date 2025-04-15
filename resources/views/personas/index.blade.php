@extends('layouts.app')

@section('title', 'Listado de Personas')

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
    .btn-info {
        background: #17a2b8;
        border-color: #17a2b8;
        color: white;
    }
    .btn {
        border-radius: 5px;
        padding: 0.5rem 1rem;
        font-weight: 500;
        margin-right: 0.3rem;
        display: inline-flex;
        align-items: center;
        font-size: 0.9rem;
    }
    .btn i {
        margin-right: 0.3rem;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.8rem;
    }
    .alert {
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
    }
    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }
    .alert-success i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }
    table {
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        width: 100%;
    }
    table thead th {
        background-color: #f8f9fa;
        color: #2a5298;
        border-bottom: 2px solid #dee2e6;
        font-weight: 600;
        padding: 0.75rem;
    }
    table tbody tr:hover {
        background-color: #f8f9fa;
    }
    table tbody td {
        padding: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
    }
    .action-buttons {
        display: flex;
        gap: 5px;
        justify-content: center;
    }
    .empty-state {
        text-align: center;
        padding: 2rem;
        background-color: #f8f9fa;
        border-radius: 8px;
        color: #6c757d;
    }
    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #adb5bd;
    }
</style>
@endsection

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h1 class="h4 mb-0"><i class="fas fa-users me-2"></i> Listado de Personas</h1>
            <a href="{{ route('personas.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nueva Persona
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($personas as $persona)
                            <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido }}</td>
                                <td>{{ $persona->email }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar esta persona?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <div class="empty-state">
                                        <i class="fas fa-user-slash"></i>
                                        <p class="mb-0">No hay personas registradas</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection