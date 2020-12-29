<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function create(){
        //データベースの処理を書く
        $post=new Post;
        $form = $request->all();
        $post->fill(['body'=>$form['body']]);
        $post->save();


        return redirect('index');
    }
    
}
//aa