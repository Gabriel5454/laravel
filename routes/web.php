<?php

use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index'); // Rota para listar os usuários

Route::get('/create-user', [UserController::class, 'create'])->name('user.create'); // Rota para criar um usuário
Route::post('/store-user', [UserController::class, 'store'])->name('user.store'); // Rota para salvar o usuário

Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show'); // Rota para visualizar o usuário
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit'); // Rota para editar o usuário
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update'); // Rota para atualizar o usuário
Route::delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('user.destroy'); // Rota para excluir o usuário
