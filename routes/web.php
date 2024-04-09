<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('site.index');

Route::get('/pendencias', [\App\Http\Controllers\PendenciasController::class, 'pendencias'])->name('site.pendencias');

// Route::get('/importacoes', [\App\Http\Controllers\ImportacoesController::class, 'importacoes'])->name('site.importacoes_get');

// Route::post('/importacoes', [\App\Http\Controllers\CsvController::class, 'importacoes'])->name('site.importacoes_post');

Route::get('/exportacoes', [\App\Http\Controllers\CsvController::class, 'exportacoes'])->name('site.exportacoes');

Route::get('/backup', [\App\Http\Controllers\BackupController::class, 'backup'])->name('site.backup');

Route::get('customer/import', [App\Http\Controllers\CustomerController::class, 'index']);

Route::post('customer/import', [App\Http\Controllers\CustomerController::class, 'importExcelData']);

/*
Route::get('/', [\App\Http\Controllers\ nomecontroller::class, 'nomecontroller'])->name('nome a atribuir ao controlles para chamadas futuras')
*/
