<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function show()
    {
        $users = User::paginate();
        //Permite mostrarme todos los usuarios del sistema como administrador
        return view('users.listausuarios', compact('users'));
    }
    public function showUser($id)
    {
        $users = User::find($id);
        return $users;
        return view('components.users.verusuario', compact('users'));
    }
    public function createUserForm()
    {
        return view('users.registrousuario');
        //Permite crear un usuario teniendo permisos de administrador
    }
    public function createUser()
    {
    }
    public function updateUser()
    {
        //Permite actualizar los datos de un usuario del sistema y cambiar su contraseña
    }
    public function deleteUser(): void
    {
        //Permite eliminar un usuario del sistema
    }
}