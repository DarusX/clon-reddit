<?php

namespace App\Http\Controllers;

class HolaController extends Controller {

    public function  hola($nombre)
    {
        return "Hola desde controller {$nombre}!";
    }

}