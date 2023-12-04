<?php

namespace App\Controllers;

// Modelos de trabajos Infantiles


use CodeIgniter\Controller;

class Infantiles extends BaseController
{
    public function Listado_Infantil()
    {
        return view('projects/infantil_list');
    }

    public function Agregar_Infantil()
    {
        return view('projects/infantil_new');
    }

    public function Buscar_Infantil()
    {
        return view('projects/infantil_search');
    }

}