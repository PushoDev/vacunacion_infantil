<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Login del Proyecto
    public function index(): string
    {
        return view('login');
    }

    // Pantalla de Administraciones
    public function administracion()
    {
        return view('projects/administrar');
    }

}
