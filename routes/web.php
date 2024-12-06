<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PlanoController;
Route::get("/",[SiteController::class,"index"])->name('home');
Route::get("/planos",[SiteController::class,"planos"])->name('planos');
Route::get("/sobre-nos",[SiteController::class,"sobreNos"])->name('sobre-nos');

Route::get("/admin/planos",[PlanoController::class,"index"])->name('planos.index');
Route::get("/admin/planos/cadastrar",[PlanoController::class,"cadastrar"])->name('planos.cadastrar-se');
Route::post("/admin/planos/salvarCadastro",[PlanoController::class,"salvarCadastro"])->name('planos.salvarCadastro');
Route::get("/admin/planos/editar/{id}",[PlanoController::class,"editar"])->name('planos.editar');
Route::put("/admin/planos/editarCadastro/{id}",[PlanoController::class,"editarCadastro"])->name('planos.editarCadastro');
Route::get("/admin/planos/visualizar/{id}",[PlanoController::class,"visualizar"])->name('planos.visualizar');
