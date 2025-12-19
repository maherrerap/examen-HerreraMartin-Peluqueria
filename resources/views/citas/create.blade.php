@extends('layouts.app')
@section('titulo','Nueva Cita')
@section('contenido')
    <h1>Registrar Cita</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre Clienta *</label>
            <input type="text" name="nombre_clienta" class="form-control" maxlength="50" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefono Clienta *</label>
            <input type="text" name="telefono_clienta" class="form-control" maxlength="10" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Servicio Solicitado *</label>
            <input type="text" name="servicio_solicitado" class="form-control" maxlength="30" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha Asignada *</label>
            <input type="datetime-local"
                   name="fecha_asignada"
                   class="form-control"
                   value="{{ old('fecha_asignada') }}"
                   required>
        </div>

        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
