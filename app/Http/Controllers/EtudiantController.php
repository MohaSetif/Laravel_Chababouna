<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class EtudiantController extends Controller
{
    function registerUser(Request $req){
        $this->validate($req,[
            'name' => 'required|max:120',
            'surname' => 'required|max:120',
            'Dadname' => 'required|max:120',
            'DadJob' => 'required|max:120',
            'day' => 'required|max:120',
            'month' => 'required|max:120',
            'year' => 'required|max:120',
            'place' => 'required|max:120',
            'residence' => 'required|max:120',
            'scholar_year' => 'required|max:120',
            'Tel' => 'required|regex:/(0)[0-9]{9}/',
            ]);

        $e = new Student;
        $e->name = strip_tags($req->name);
        $e->surname = strip_tags($req->surname);
        $e->Dadname = strip_tags($req->Dadname);
        $e->DadJob = strip_tags($req->DadJob);
        $e->day = strip_tags($req->day);
        $e->month = strip_tags($req->month);
        $e->year = strip_tags($req->year);
        $e->place = strip_tags($req->place);
        $e->residence = strip_tags($req->residence);
        $e->scholar_year = strip_tags($req->scholar_year);
        $e->Tel = strip_tags($req->Tel);
        $e->save();
        $data = $req->input();
        $req->session()->put('name', $data['name']);
        return redirect('الصفحة-الرئيسية');
    }

    function loginUser(Request $req){
        $this->validate($req,[
            'name' => 'required|max:120',
            'surname' => 'required|max:120',
            'Dadname' => 'required|max:120',
            'Tel' => 'required|regex:/(0)[0-9]{9}/',
            ]);
            $name = Student::where('name', '=', $req->name)->first();
            $surname = Student::where('surname', '=', $req->surname)->first();
            $Dadname = Student::where('Dadname', '=', $req->Dadname)->first();
            $tel = Student::where('Tel', '=', $req->Tel)->first();
            if($name && $surname && $Dadname && $tel){
                $req->session()->put('name', $name->name);
                return redirect('الصفحة-الرئيسية');
            }else{
                return back()->with('fail', 'هذا المستعمل غير موجود');
            }
    }
}
