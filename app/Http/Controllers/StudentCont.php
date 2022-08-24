<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentCont extends Controller
{
    
    /* Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $students = Student::latest()->paginate(5);
     
       return view('students.index',compact('students'))
           ->with('i', (request()->input('page', 1) - 1) * 5);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('students.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $this->validate($request,[
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
        'Tel' => 'required|regex:/(05)[0-9]{8}/',
        ]);
     
       Student::create($request->all());
      
       return redirect()->route('students.index')
                       ->with('success','Student inserted successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
   public function show(Student $student)
   {
       return view('students.show',compact('student'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
   public function edit(Student $student)
   {
       return view('students.edit',compact('student'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Student $student)
   {
    $this->validate($request,[
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
        'Tel' => 'required|regex:/(05)[0-9]{8}/',
        ]);
     
       $student->update($request->all());
     
       return redirect()->route('students.index')
                       ->with('success','Student updated successfully');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
   public function destroy(Student $student)
   {
       $student->delete();
      
       return redirect()->route('students.index')
                       ->with('success','Student deleted successfully');
   }
}
