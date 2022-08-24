<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Bookstore;
use App\Http\Controllers\BookCont;
use App\Http\Controllers\StudentCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::view('الصفحة-الرئيسية', 'MainPage');

Route::view('التسجيل', 'Signin');
Route::view('صفحة-الدخول', 'UserExists');
Route::post('التسجيل', [EtudiantController::class, 'registerUser']);
Route::post('صفحة-الدخول', [EtudiantController::class, 'loginUser']);


//Route::view("add", 'Emp');
//Route::post('add', [EmpCont::class, 'add']);


Route::get('مكتبتنا', [Bookstore::class, 'list']);


Route::resource('books', BookCont::class);
Route::resource('students', StudentCont::class);


Route::get('/logout', function () { 
    if(session()->has('name')){
        session()->pull('name');
    }
    return redirect('الصفحة-الرئيسية');
});
