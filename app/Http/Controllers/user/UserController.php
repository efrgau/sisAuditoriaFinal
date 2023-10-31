<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    #GET
    public function viewProfile($id)
    {
        $detailUser = User::find(Auth::user()->id);
        $rol = Role::where('model_id', '==', Auth::user()->id);
    }
    public function editProfile()
    {
        //$user = User::find($id);
        return view('users.userProfile');
    }
    #POST
    public function updateProfile($id)
    {
    }
}
