<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    function register(Request $req){
        $user = new User;
        $user->email = $req->input('email');
        $user->first_name = $req->input('name');
        $user->surname = $req->input('surname');
        $user->password = Hash::make($req->input('password'));
        $user->role = $req->input('role');
        $user->date_of_birth = $req->input('dateOfBirth');
        $user->save();

        // return $user;
    }
}
