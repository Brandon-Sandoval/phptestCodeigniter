<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $data = [
            "titulo" => "Inicio"
        ];

        $vistas = view('contacto/header',$data).
                  view('contacto/menu').
                  view('contacto/inicio').
                  view('contacto/footer');

        echo $vistas;
    }

    public function catalogo()
    {

        $data = [
            "titulo" => "catalogo"
        ];
        //$catalogo = ['numero' => $numeroCatalogo];

        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo');
        echo view('contacto/footer');
    }
}