<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chababounauser;

class EtudiantController extends Controller
{
    function AddStudent(Request $req){
        // dump($req);
        $this->validate($req,[
            'name' => 'required|max:120',
            'surname' => 'required|max:120',
            'job' => 'max:120',
            'day' => 'required|max:120',
            'month' => 'required|max:120',
            'year' => 'required|max:120',
            'place' => 'required|max:120',
            'residence' => 'required|max:120',
            'email' => 'required|email',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'scholar_year' => 'required|max:120',
            'tel' => 'required|regex:/(0)[0-9]{9}/',
            ]);

            $student = Chababounauser::where([
                'email' => $req->email,
              ])->first();
              if(!$student){
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
        $e->email = strip_tags($req->email);
        if($req->hasfile('photo')){
            $file = $req->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/utilisateurs', $filename);
            $e->photo = $filename;
        }
        $e->inscripted_in = 'التعليم-القرآني';
        $e->scholar_year = strip_tags($req->scholar_year);
        $e->tel = strip_tags($req->tel);
        $e->save();
        return redirect('إرسال-الاستمارة');
        }else{
            echo "<script>";
            echo "alert('هذا المستخدم موجود');";
            echo "</script>";
           }
    }
}
