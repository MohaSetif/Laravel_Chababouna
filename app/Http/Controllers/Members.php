<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class Members extends Controller
{
    function DBoperations(){
        return DB::table('members')->avg('id');
    }
}
