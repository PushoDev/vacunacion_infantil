<?php

namespace App\Models;

use CodeIgniter\Model;

class VacunasModel extends Model
{
    protected $table = "vacunas";
    protected $primaryKey = "id";

    // Listar las vacunas
    public function listarVacunas()
    {
        $vacunas = $this->db->query("SELECT * FROM vacunas");
        return $vacunas->getResult();
    }

    // Agregar Vacuna
    public function insertarvacuna($nuevavacuna)
    {
        $nombresvac = $this->db->table('vacunas');
        $nombresvac->insert($nuevavacuna);

        return $this->db->insert_id();
    }

    // Obtener datos de la vacuna para editar
    public function obtenervacuna($id)
    {
        $nombresvac = $this->db->table('vacunas');
        $nombresvac->where('id', $id);

        return $nombresvac->get()->getResultArray();
    }

    // Actualizar Datos de la vacuna
    public function actualizarVacunas($actualizarvacuna, $id)
    {
        $nombresvac = $this->db->table('vacunas');
        $nombresvac->set($actualizarvacuna);
        $nombresvac->where('id', $id);

        return $nombresvac->update();
    }

    // Eliminar Vacuna
    public function eliminarvacuna($id)
    {
        $nombresvac = $this->db->table('vacunas');
        $nombresvac->where($id);

        return $nombresvac->delete();
    }
}