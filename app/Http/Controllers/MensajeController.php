<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    protected $valores_tipo = 'mensaje';

    public function insertar(Request $request)
    {
        //Estableciendo reglas de validación
        $reglas = [
            'nombre' => 'required|max:190',
            'email' => 'required|max:190',
            'mensaje' => 'required|max:255',
        ];
        //Validando petición
        $request->validate($reglas);

        //Insertando nuevo registro y recuperando el ID
        //------------------------------------------------
        $mensaje = Mensaje::create($request->all());
        if(empty($mensaje->id)) {
            //Log::error('Failed to insert row into database.');
            dd('ERROR al insertar en la tabla ['.$this->valores_tipo.'s'.'] de la base de datos. ['. $mensaje->id.']');
        } else {
            //dd('Inserto efectuado. ['. $mensaje->id.']');

            //Redirigiendo al Listado
            //==========================================
            //  -> Redirigiendo hacia nombre de Ruta
            $accion = 'insertar_'.$mensaje->id;
            return redirect()->route('index', ['accion' => $accion]);
            ////return redirect()->route('welcome', ['accion' => $accion]);
        }
    }
}
