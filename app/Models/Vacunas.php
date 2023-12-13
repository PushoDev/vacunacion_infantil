<?php

namespace App\Models;

use CodeIgniter\Model;

// Modelo Clase Vacuna
class Vacunas extends Model
{
    protected $table = 'vacunas';
    protected $primaryKey = 'id';

    // Obtener la cantidad de Vacunas para DashBoard
    public function obtenerCantidaddeVacunas()
    {
        return $this->countAll();
    }

    // Listar las vacunas
    // public function listarVacunas()
    // {
    //     $vacunas = $this->db->query("SELECT * FROM vacunas");
    //     return $vacunas->getResult();
    // }

    // Agregar Vacuna

    // Obtener Vacuna

    // Actualizar Vacuna

    // Eliminar Vacuna

}