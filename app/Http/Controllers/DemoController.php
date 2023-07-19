<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function hello(){
     $posts =  DB::table('posts')
         ->where('id','=','3')
         ->increment('min_to_read');
     return $posts;


    }
}
