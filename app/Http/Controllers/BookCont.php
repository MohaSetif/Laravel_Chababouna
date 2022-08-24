<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
      
        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'copies' => 'required', 
            'note' => 'required', 
            'parts' => 'required', 
            'publication' => 'required', 
            'documentation' => 'required', 
            'review' => 'required', 
            'writer_name' => 'required', 
            'title' => 'required', 
            'field' => 'required', 
            'insert_date' => 'required',
        ]);
      
        Book::create($request->all());
       
        return redirect()->route('books.index')
                        ->with('success','Book inserted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'copies' => 'required', 
            'note' => 'required', 
            'parts' => 'required', 
            'publication' => 'required', 
            'documentation' => 'required', 
            'review' => 'required', 
            'writer_name' => 'required', 
            'title' => 'required', 
            'field' => 'required', 
            'insert_date' => 'required',
        ]);
      
        $book->update($request->all());
      
        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
       
        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
