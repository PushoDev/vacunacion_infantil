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
}