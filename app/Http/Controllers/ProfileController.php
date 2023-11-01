<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function show($id)
    {
        $detailUser = User::find($id);
        //$rol = Role::where('model_id', '==', Auth::user()->id);

        return view('users.userProfile', compact('detailUser'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $detailUser
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $detailUser)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $detailUser->id,
            // Agrega otras reglas de validación según tus necesidades
        ]);

        //$detailUser->update($request->all());
        $detailUser->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'identification' => $request->input('identification'),
            'celular' => $request->input('celular'),
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'perfil actualizado');
    }
}