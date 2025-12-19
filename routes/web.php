<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;

Route::get('/', function () { return redirect() -> route('citas.index');});

Route::resource('citas', CitasController::class);

