<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $dato = [
            "titular" => "Hola Mundo Contacto"
        ];

        $vistas = view('contacto/header').
                  view('contacto/menu').
                  view('contacto/inicio',$dato).
                  view('contacto/footer');

        echo $vistas;
    }

    public function catalogo()
    {
        echo view('contacto/header');
        echo view('contacto/menu');
        echo view('contacto/catalogo');
        echo view('contacto/footer');
    }
}