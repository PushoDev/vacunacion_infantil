<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $data = [
            // Usuario con el rol de Administrador
            [
                'nombre' => 'Luis Alberto',
                'apellidos' => 'Guisado',
                'cargo' => 'Desarrollador',
                'e_mail' => 'bethocubans1990@hotmail.com',
                'usuario' => 'pusho.dev',
                'password' => password_hash('push0', PASSWORD_DEFAULT), 
                'type_usuario' => 'admin',
            ],
            // Usuario con el rol de usuario general para trabajar Inventario
            [
                'nombre' => 'Ana',
                'apellidos' => 'Gómez',
                'cargo' => 'Doctora',
                'e_mail' => 'ana@example.com',
                'usuario' => 'anita',
                'password' => password_hash('an@', PASSWORD_DEFAULT), 
                'type_usuario' => 'usuario',
            ],
            
        ];

        // Insertar datos en la tabla
        $this->db->table('t_usuarios')->insertBatch($data);
    }
}

