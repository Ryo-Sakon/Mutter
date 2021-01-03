<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //DBを使う表記にのみ必要とする。
use Illuminate\Support\Facades\DB;

// use App\User;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::get();
        // return view('index',['posts' => $posts , ]);
        //'posts'は、index.blade.phpの$postsの意味

        //DBを使った表記方法
        
        $posts = DB::select('SELECT *,posts.id as post_id FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC');

        return view('index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        //データベースの処理を書く
        // $post = new Post;
        // $form = $request->all();
        // // $users = User::get();
        // $id = Auth::id();
        // // $userName = Auth::user()->name;
        // $post->fill(['body'=>$form['body'],'user_id'=>$id]);
        // $post->save();

        //DBを使った表記方法
        $param = [
            'user_id' => Auth::id(),
            'body' => $request->all()['body'],
        ];
        DB::insert('insert into posts (user_id, body) values (:user_id, :body)', $param);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        //消すなにか
        DB::delete('DELETE FROM posts WHERE id = :post_id', ['post_id'=>$request->delete]);
        return redirect('/');
    }
}
//aaaaaaaaa