<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SegundaPaginaController extends Controller
{
    public function exibirSegundaPagina(): View
    {
        return view('segunda_pagina'); 
    }
}