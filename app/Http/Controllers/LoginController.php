<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*protected $usuarios = [
        [
            'email' => 'uno@ya.es',
            'pass' => '1111',
            'perfil' => 'admin',
        ],
        [
            'email' => 'dos@ya.es',
            'pass' => '2222',
            'perfil' => 'usu',
        ],
    ];*/
    protected $usuarios = [
        '1111' => ['uno@ya.es', 'admin', 'YoSoY_ADMIN'],
        '2222' => ['dos@ya.es', 'usu', 'Tacatún'],
    ];

    public function iniciarSesion(Request $request)
    {
        //Estableciendo reglas de validación
        $reglas = [
            'email' => 'required|max:100',
            'pass' => 'required|max:20',
        ];
        //Validando petición
        $request->validate($reglas);

        $usu_OK = false;
        $usu_msg = '';
        $usuario = [];
        //Comprobando datos de usuario recibido
        foreach ($this->usuarios as $k_usu => $v_usu) {
            if($request->pass == $k_usu && $request->email == $v_usu[0]) {
                //usuario registrado
                $usu_OK = true;
                $usuario = $v_usu;
                break;
            }
        }

        if(!$usu_OK) {
            $usu_msg = 'El email y/o la contraseña suministrad@s no son válidos.';
            return redirect()->route('index', ['accion' => ['usu_noOK', $usu_msg]]);
        } else {
            if($usuario[1] == 'admin') {
                return redirect()->route('panel_admin', ['usuario' => $usuario]);
            } elseif($usuario[1] == 'usu') {
                return redirect()->route('panel_usuario', ['usuario' => $usuario]);
            }
        }

    }
}
