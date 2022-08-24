<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function show(){
        $data = Member::paginate(2);
        return view('list', ['members'=>$data]);
    }
    function delete($data){
        $data = Member::find($data);
        $data->delete();
        return redirect('list');
    }
    function showdata($id){
       $data = Member::find($id);
       return view('edit', ['data'=>$data]);
    }
    function update(Request $req){
        $data = Member::find($req->id);
        $data->id = $req->id;
        $data->name = $req->name;
        $data->age = $req->age;
        $data->password = $req->password;
        $data->save();
        return redirect('list');
    }
}
