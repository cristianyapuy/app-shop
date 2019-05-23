<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function otrabienvenida(){
        $a = 5;
        return "el valor de a es = $a";
    }
}
