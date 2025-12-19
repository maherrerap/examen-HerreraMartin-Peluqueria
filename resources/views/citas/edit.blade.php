@extends('layouts.app')
@section('titulo','Editar Cita')
@section('contenido')
    <h1>Editar Cita</h1>

    <form action="{{ route('citas.update', $cita) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre Clienta *</label>
            <input type="text"
                   name="nombre_clienta"
                   class="form-control"
                   maxlength="50"
                   value="{{ old('nombre_clienta', $cita->nombre_clienta) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefono Clienta *</label>
            <input type="text"
                   name="telefono_clienta"
                   class="form-control"
                   maxlength="10"
                   value="{{ old('telefono_clienta', $cita->telefono_clienta) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Servicio Solicitado *</label>
            <input type="text"
                   name="servicio_solicitado"
                   class="form-control"
                   maxlength="30"
                   value="{{ old('servicio_solicitado', $cita->servicio_solicitado) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado_cita" class="form-select" required>
                <option value="PENDIENTE" {{$cita->estado_cita === 'PENDIENTE' ? 'selected' : '' }}>PENDIENTE</option>
                <option value="YA VINO" {{$cita->estado_cita === 'YA VINO' ? 'selected' : '' }}>YA VINO</option>
                <option value="CANCELO" {{$cita->estado_cita === 'CANCELO' ? 'selected' : '' }}>CANCELO</option>
            </select>
        </div>


        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
