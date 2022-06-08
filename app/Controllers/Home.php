<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dato = [
            "titulo" => "Facultad autodidacta"
        ];
        return view('welcome_message',$dato);
    }

    public function inicio()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function enviarPost()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        $resultado = $valor1 + $valor2;
        echo($resultado);
    }
}
