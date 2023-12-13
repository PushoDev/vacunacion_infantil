<?php

namespace App\Controllers;

// Modelos de trabajo para Vacunas
// use App\Models\Vacunas as VacunasModel;
use App\Models\VacunasModel;

class Vacunas extends BaseController

{
    // Listar todas las vacunas
    public function Listado_Vacunas()
    {
        $vacunas = new VacunasModel();
        $esquemavacunacion = $vacunas->listarVacunas();

        $datos_vacunas = [
            "esqvac"=> $esquemavacunacion
        ];

        return view('projects/vacunas_list', $datos_vacunas);
    }

    public function Agregar_Vacuna()
    {
        return view('projects/vacunas_new');
    }
    
}