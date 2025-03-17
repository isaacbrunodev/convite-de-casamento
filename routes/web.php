<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvidadoController;
use App\Http\Controllers\ConfirmacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirmar-presenca', [ConfirmacaoController::class, 'index'])->name('confirmar.presenca');
Route::post('/confirmar-presenca', [ConfirmacaoController::class, 'confirmar'])->name('confirmar.presenca.post');
Route::get('/buscar-nomes', [ConfirmacaoController::class, 'buscarNomes'])->name('buscar.nomes');

Route::get('/orientacoes', function () {
    return view('orientacoes');
})->name('orientacoes');

Route::get('/lista-presentes', function () {
    return view('presentes');
})->name('presentes');
