@extends('books.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Application - Chababouna's Library</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
           <th>عدد النسخ</th>
           <th>الملاحظة</th>
           <th>عدد الأجزاء</th>
           <th>دار النشر</th>
           <th>التخريج</th>
           <th>التحقيق</th>
           <th>المؤلف</th>
           <th>العنوان</v>
           <th>التخصص</th>
           <th>تاريخ الإدخال</th>
           <th>الرقم</th>
           <th>العمليات</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->copies }}</td>
            <td>{{ $book->note }}</td>
            <td>{{ $book->parts }}</td>
            <td>{{ $book->publication }}</td>
            <td>{{ $book->documentation }}</td>
            <td>{{ $book->review }}</td>
            <td>{{ $book->writer_name }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->field }}</td>
            <td>{{ $book->insert_date }}</td>
            <td>{{ ++$i }}</td>

            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $books->links() !!}
      
@endsection