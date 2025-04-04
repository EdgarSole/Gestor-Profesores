<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltaDocenteController extends Controller
{
    public function create()
    {
        return view('alta_docente'); 
    }
}

