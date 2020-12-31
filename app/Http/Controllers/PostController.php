<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
// use App\User;

class PostController extends Controller
{
    public function index()
    {
        
        
        $posts = Post::get();

        return view('index',['posts' => $posts , ]);//'posts'は、index.blade.phpの$postsの意味
    }
    
    
    public function create(Request $request){
        //データベースの処理を書く
        $post = new Post;
        $form = $request->all();
        // $users = User::get();
        $id = Auth::id();
        // $userName = Auth::user()->name;
        $post->fill(['body'=>$form['body'],'user_id'=>$id]);
        $post->save();


        return redirect('/');
    }
    

}
//aa