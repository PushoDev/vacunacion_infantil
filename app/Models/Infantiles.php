<?php

namespace App\Models;

use CodeIgniter\Model;

// Modelo para los datos Infantiles
class Infantiles extends Model
{
    protected $table = "pacientes";
    protected $primaryKey = "id";

    // Obtener cantidad de Niños en el Sistema
    public function obtenerCantidaddeInfantiles()
    {
        return $this->countAll();
    }

    // Agre

    // Edit

    // Elimi
}