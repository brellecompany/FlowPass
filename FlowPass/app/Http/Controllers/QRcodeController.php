<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class QRcodeController extends Controller
{
    public function exibirQRcode(): View
    {
        return view('qr_code'); 
    }
}