<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/test', [TestController::class, 'test'])->name('test');

use App\Http\Controllers\SegundaPaginaController;

Route::get('/segunda-pagina', [SegundaPaginaController::class, 'exibirSegundaPagina'])->name('segunda.pagina');