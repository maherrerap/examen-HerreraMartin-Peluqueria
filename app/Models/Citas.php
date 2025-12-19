<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';
    protected $fillable = [
        'nombre_clienta',
        'telefono_clienta',
        'servicio_solicitado',
        'fecha_cita',
        'estado_cita',
        'fecha_asignada',
    ];

    static public function getCitas() {
        return Citas::all();
    }

    static public function createCita(array $request) {
        return self::create($request);
    }

    static public function updateCitas(Citas $cita, array $data) {
        return $cita -> update($data);
    }
}
