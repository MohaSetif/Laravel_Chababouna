<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chababounauser;

class JoinControl extends Controller
{
    function AddUser(Request $req){
        $e = new Chababounauser;
        $e->name = strip_tags($req->name);
        $e->surname = strip_tags($req->surname);
        $e->sex = $req->sex;
        $e->job = strip_tags($req->job);
        $e->DadJob = strip_tags($req->DadJob);
        $e->MomJob = strip_tags($req->MomJob);
        $e->day = strip_tags($req->day);
        $e->month = strip_tags($req->month);
        $e->year = strip_tags($req->year);
        $e->place = strip_tags($req->place);
        $e->residence = strip_tags($req->residence);
        $e->hobby = strip_tags($req->hobby);
        $e->help = strip_tags($req->help);
        $e->email = strip_tags($req->email);
        if($req->hasfile('photo')){
            $file = $req->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/utilisateurs', $filename);
            $e->photo = $filename;
        }
        $e->inscripted_in = 'الانخراط';
        $e->tel = strip_tags($req->tel);
        $e->save();
        return redirect('إرسال-الاستمارة');
    }
}
