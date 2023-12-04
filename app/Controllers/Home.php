<?php

namespace App\Controllers;

// Modelos TUsuarios para el manejo de los usuarios a ingresar
use App\Models\TUsuarios;
// Modelo de las vacunas
use App\Models\Vacunas;
// Modelo de los pacientes infantiles
use App\Models\Infantiles;


use CodeIgniter\Controller;

class Home extends BaseController
{
    // Mostrar formulario de inicio de sesión
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    // Procesar datos de inicio de sesión
    public function login()
    {
        // Obtener datos del formulario
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        // Validar las credenciales
        $Usuario = new TUsuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        

        if (count($datosUsuario) > 0 && password_verify("$password", $datosUsuario[0]['password'])) {

            // Iniciar sesión
            $session = session();
            $session->set([
                "usuario_id" => $datosUsuario[0]['id_usuario'],
                "usuario_nombre" => $datosUsuario[0]['nombre'],
                "usuario" => $datosUsuario[0]['usuario'],
                "type_usuario" => $datosUsuario[0]['type_usuario'],
            ]);
            
            // Redirigir a la pantalla de administración
            return redirect()->to(base_url('/inventario/administrar'));
        } 
        else 
        {
            // Credenciales incorrectas, mostrar mensaje de error
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    // Pantalla de Administración
    public function administracion()
    {
        // Verificar si el usuario está autenticado
        $session = session();
        if (!$session->has('usuario_id')) {
            // Si no está autenticado, redirigir al formulario de inicio de sesión
            return redirect()->to('/');
        }

        // Cantidad de Vacunas en el Sist.
        $modeloVacuna = new Vacunas();
        $CantidaddeVacunas = $modeloVacuna->obtenerCantidaddeVacunas();
        // Catidad de Niños en el Sist.
        $modeloInfantil = new Infantiles();
        $Cantidaddepacientes = $modeloInfantil->obtenerCantidaddeInfantiles();


        // Usuario autenticado, mostrar la pantalla de administración
        return view('projects/administrar', [
            'CantidadVacunas'=> $CantidaddeVacunas,
            'CantidadInfantiles'=> $Cantidaddepacientes,
        ]);
        
    }

    // Cerrar sesión
    public function logout()
    {
        // Destruir la sesión
        $session = session();
        $session->destroy();

        // Redirigir al formulario de inicio de sesión
        return redirect()->to('/');
    }
}