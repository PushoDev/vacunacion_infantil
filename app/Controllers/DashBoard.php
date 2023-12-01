<?php

namespace App\Controllers;

class DashBoard extends BaseController
{
    public function login(): string
    {
        return view('administraciones');
    }
}