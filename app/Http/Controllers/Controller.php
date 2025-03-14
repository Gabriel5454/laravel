<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){ 
        // Recuperar os registros do banco dados 
        $users = User::orderByDesc('id')->get(); 
     
        // Carregar a VIEW 
        return view('users.index', ['users' => $users]);} 
 
}
