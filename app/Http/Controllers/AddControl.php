<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AddControl extends Controller
{
    function add(Request $req){
        $member = new Member;
        $member->id = $req->id;
        $member->name = $req->name;
        $member->age = $req->age;
        $member->password = $req->password;
        $member->save();
    }
}
