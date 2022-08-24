<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmpCont extends Controller
{
    function add(Request $req){
        $e = new Employe;
        $e->nom = $req->nom;
        $e->prenom = $req->prenom;
        $e->adr = $req->adr;
        $e->email = $req->email;
        $e->save();
    }
}
