<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function show()
    {
        $usuarioActual = Auth::user();
        // Obtén todos los usuarios excepto el usuario autenticado
        $users = User::where('id', '!=', $usuarioActual->id)->paginate();

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
        $user = new User();
        $roles = Role::pluck('name', 'id');
        return view('users.registrousuario', compact('user', 'roles'));
        //Permite crear un usuario teniendo permisos de administrador
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identification' => $request->identification,
            'celular' => $request->celular,
            'password' => $request->password,
        ]);

        return redirect('/listausuarios')->with('success', 'Registro exitoso');
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
