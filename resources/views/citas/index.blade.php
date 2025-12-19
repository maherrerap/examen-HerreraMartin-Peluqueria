@extends('layouts.app')
@section('titulo', 'Citas')
@section('contenido')
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-3">
        <h1 class="mb-0">Citas</h1>
        <a href="{{route('citas.create')}}" class="btn btn-primary">Nueva Cita</a>
    </div>
    <p>Administra las Citas de Estilistas Nuevo Look</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre Clienta</th>
                <th>Telefono Clienta</th>
                <th>Servicio Solicitado</th>
                <th>Fecha de Agendación</th>
                <th>Fecha de Asignación</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{$cita->nombre_clienta}}</td>
                    <td>{{$cita->telefono_clienta}}</td>
                    <td>{{$cita->servicio_solicitado}}</td>
                    <td>{{$cita->fecha_cita}}</td>
                    <td>{{$cita->fecha_asignada}}</td>
                    <td>{{$cita->estado_cita}}</td>
                    <td>
                        <a href="{{route('citas.edit', $cita)}}" class="btn btn-sm btn-warning">Editar</a>
                        @if($cita->estado_cita !== 'CANCELO' &&  $cita->estado_cita !== 'YA VINO')
                            <form action="{{ route('citas.destroy', $cita) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Cancelo la Cita?')">
                                    Cancelar
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
