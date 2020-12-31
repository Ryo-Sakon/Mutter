<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController2 extends Controller
{
    public function index(Request $request){
        return view('index',['items'=>DB::select('select * from users')]);
    }
}
