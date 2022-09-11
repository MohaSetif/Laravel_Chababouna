<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function AddCourse(Request $req){
    $this->validate($req,[
        'name' => 'required|max:120',
        'surname' => 'required|max:120',
        'sex' => 'required',
        'scholar_year' => 'required|max:120',
        'local' => 'required',
        'email' => 'email|required',
        'tel' => 'required|regex:/(0)[0-9]{9}/',
        'DadTel' => 'required|regex:/(0)[0-9]{9}/',
        ]);

        $course = Course::where([
            'tel' => $req->tel,
          ])->first();
          if(!$course){
    $e = new Course;
    $e->name = strip_tags($req->name);
    $e->surname = strip_tags($req->surname);
    $e->sex = $req->sex;
    $e->inscripted_in = 'دروس-الدعم';
    $e->scholar_year = strip_tags($req->scholar_year);
    $e->email = strip_tags($req->email);
    $e->tel = strip_tags($req->tel);
    $e->DadTel = strip_tags($req->DadTel);
    $e->save();
    return redirect('الصفحة-الرئيسية');
    }
    else{
        echo "<script>";
        echo "alert('هذا المستخدم موجود');";
        echo "</script>";
       }
   }
}
