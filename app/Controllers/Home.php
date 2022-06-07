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

    public function test()
    {
        return view('test');
    }
}
