<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinControl;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IlliterateController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Bookstore;
use App\Http\Controllers\BookCont;
use App\Http\Controllers\ChababounaUserCont;
use App\http\Controllers\PendingStatus;
use App\Http\Controllers\TamhidiController;
use App\Http\Controllers\TahdiriController;
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


Route::group(['prefix' => 'ChababounaAdmin'], function () {
    Voyager::routes();
});


Route::view('الصفحة-الرئيسية', 'MainPage');

Route::view('التسجيل-في-المدرسة-القرآنية', 'Signin');
Route::view('صفحة-الدخول', 'UserExists');
Route::post('التسجيل', [EtudiantController::class, 'AddStudent']);
Route::post('صفحة-الدخول', [EtudiantController::class, 'loginUser']);


Route::view('إرسال-الاستمارة', 'AfterSignin');


Route::view('المستوى-التحضيري', 'Tahdiri');
Route::view('المستوى-التمهيدي', 'Tamhidi');
Route::post('tamhidilog', [TamhidiController::class, 'AddChild']);
Route::post('tahdirilog', [TahdiriController::class, 'AddChild']);


// Route::view("add", 'Emp');
// Route::post('add', [EmpCont::class, 'add']);


Route::get('مكتبتنا', [Bookstore::class, 'list']);


Route::resource('books', BookCont::class);
Route::resource('chababounausers', ChababounaUserCont::class);
Route::post('PendingStatus', [PendingStatus::class, 'changeStatus']);

Route::get('/logout', function () { 
    if(session()->has('name')){
        session()->pull('name');
    }
    return redirect('الصفحة-الرئيسية');
});


Route::view('اختيار-المقر', 'Children');
Route::view('دروس-الدعم', 'Courses');
Route::post('CourseAdd', [CourseController::class, 'AddCourse']);
Route::view('سجلوا-أولادكم', 'ChildrenLogin');
Route::view('user', 'MemberData');
Route::view('childData', 'DisplayChildData');
Route::view('memberLog', 'memberLog');


Route::view('الانضمام-إلى-الجمعية', 'Join');
Route::post('NewJoin', [JoinControl::class, 'AddUser']);

Route::view('الخيارات', 'LinkCard');

Route::view('التسجيل-في-محو-الأمية', 'FormIlliterate');
Route::post('added', [IlliterateController::class, 'AddIlliterate']);