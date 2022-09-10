<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chababounauser;

class IlliterateController extends Controller
{
    function AddIlliterate(Request $req){
        $i = new Chababounauser;
        $i->name = strip_tags($req->name);
        $i->surname = strip_tags($req->surname);
        $i->sex = $req->sex;
        $i->day = $req->day;
        $i->month = $req->month;
        $i->year = strip_tags($req->year);
        $i->place = strip_tags($req->place);
        $i->residence = strip_tags($req->residence);
        if($req->hasfile('photo')){
            $file = $req->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/utilisateurs', $filename);
            $i->photo = $filename;
        }
        $i->inscripted_in = 'محو-الأمية';
        $i->tel = strip_tags($req->tel);
        $i->save();
        return redirect('إرسال-الاستمارة');
    }
}
