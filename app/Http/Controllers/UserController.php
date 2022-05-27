<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $nama = null;
    public $email = null;
    public $password = null;

    function updateUser()
    {
        return view('updateUser');
    }

    function updatedata(Request $req)
    {
        $user = User::find(auth()->user()->id);
        if($req->nom !== null){
            $user->update([
                'name' => $req->nom,
            ]);
        }

        if($req->email !== null){
            $user->update([
                'email' => $req->email,
            ]);
        }

        if($req->password !== null){
            $user->update([
                'password' => Hash::make($req->password)
            ]);
        }

        $annonces = Annonce::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('annonces'));
    }
}
