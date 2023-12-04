<?php

namespace App\Controllers;

// Modelos de trabajo para Vacunas


use CodeIgniter\Controller;

class Vacunas extends BaseController

{
    public function Listado_Vacunas()
    {
        return view('projects/vacunas_list');
    }

    public function Agregar_Vacuna()
    {
        return view('projects/vacunas_new');
    }
    
}