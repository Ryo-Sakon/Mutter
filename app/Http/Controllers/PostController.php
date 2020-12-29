<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('index', ['posts' => $posts]);
    }
    
    
    public function create(Request $request){
        //データベースの処理を書く
        $post = new Post;
        $form = $request->all();
        // $userName = Auth::user()->name;
        $post->fill(['body'=>$form['body'],'user_id'=>1]);
        $post->save();


        return redirect('Mutter');
    }
    
}
//aa