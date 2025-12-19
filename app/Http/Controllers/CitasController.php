<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Citas::getCitas();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_clienta' => 'required|string|max:50',
            'telefono_clienta' => 'required|string|max:10',
            'servicio_solicitado' => 'required|string|max:30',
            'fecha_asignada' => 'required|date',
        ]);

        $data['fecha_cita'] = now()->toDateString();
        $data['estado_cita'] = 'PENDIENTE';

        Citas::createCita($data);

        return redirect() -> route('citas.index')->with('success', 'Cita Registrada Exitosamente!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citas $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Citas $cita)
    {
        $request->validate([
            'nombre_clienta' => 'required|string|max:50',
            'telefono_clienta' => 'required|string|max:10',
            'servicio_solicitado' => 'required|string|max:30',
            'estado_cita' => 'required|string|max:15',
        ]);


        Citas::updateCitas($cita, $request->all());

        return redirect() -> route('citas.index')->with('success', 'Cita Actualizada Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Citas $cita)
    {
        $cita -> update(['estado_cita' => 'CANCELO']);

        return redirect() -> route('citas.index')->with('success', 'Cita Cancelada Exitosamente!');
    }
}
