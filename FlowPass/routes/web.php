<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/welcome', [TestController::class, 'exibirPaginicial'])->name('welcome');

use App\Http\Controllers\SegundaPaginaController;

Route::get('/segunda-pagina', [SegundaPaginaController::class, 'exibirSegundaPagina'])->name('segunda.pagina');

use App\Http\Controllers\QRcodeController;

Route::get('/qr-code', [QRcodeController::class, 'exibirQRcode'])->name('qr.code');
