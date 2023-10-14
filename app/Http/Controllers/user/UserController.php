<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    #GET
    public function viewProfile($id)
    {
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