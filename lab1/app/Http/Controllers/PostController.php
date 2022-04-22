<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        
       // dd($posts); 
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $users=User::all();
        return view('posts.create', ["users" => $users]);
    }

    public function store(StorePostRequest $request)
    {
        $data=request()->all();
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['postCreator']
        ]);
        return redirect()->route('posts.index');
    }

    public function show($postId)
    {
      $posts=Post::find($postId);
             return view('posts.show', ["post" => $posts]);

    }

    public function edit($postId)
    {
        $users=User::all();
        $posts = Post::find($postId);
        return view('posts.edit', ["post" => $posts],["users" => $users]);

    }
    
    public function delete($postId)
    {
        $posts = Post::where('id',$postId)->delete();
        return view('posts.delete',[
            'posts' => $posts,
        ]);
    } 

    public function update($postId , UpdatePostRequest $request){
        $data=request()->all();
        Post::where('id',$postId)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['postCreator']
        ]);
        return redirect()->route('posts.index');
    }

}
