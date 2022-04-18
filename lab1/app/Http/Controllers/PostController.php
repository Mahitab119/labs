<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'post_creator' => 'Ahmed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 2, 'title' => 'PHP', 'post_creator' => 'Mohamed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 3, 'title' => 'Javascript', 'post_creator' => 'Ali', 'created_at' => '2022-04-16 10:37:00'],
        ];
        
        // dd($posts); for debugging
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return 'we are in store';
    }

    public function show($postId)
    {
      
        $posts = [
            [
                'id' => 1, 
                'title' => 'Laravel',
                'post_creator' => 'Ahmed', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ahmed@gmail.com',
                'description'=>'any description of ahmed '
            ],
            [
                'id' => 2, 
                'title' => 'PHP',
                'post_creator' => 'Mohamed',
                 'created_at' => '2022-04-16 10:37:00',
                 'email'=>'Mohamed@gmail.com',
                 'description'=>'any description of mohamed'
            ],
            [
                'id' => 3, 
                'title' => 'Javascript', 
                'post_creator' => 'Ali', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ali@gmail.com',
                'description'=>'any description of ali'
            ],
        ];

        foreach($posts as $post){
            if($post['id'] == $postId){
                $posts=$post;
            }
        }
             return view('posts.show', ["post" => $posts]);

    }

    public function edit($postId)
    {
      
        $posts = [
            [
                'id' => 1, 
                'title' => 'Laravel',
                'post_creator' => 'Ahmed', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ahmed@gmail.com',
                'description'=>'any description of ahmed '
            ],
            [
                'id' => 2, 
                'title' => 'PHP',
                'post_creator' => 'Mohamed',
                 'created_at' => '2022-04-16 10:37:00',
                 'email'=>'Mohamed@gmail.com',
                 'description'=>'any description of mohamed'
            ],
            [
                'id' => 3, 
                'title' => 'Javascript', 
                'post_creator' => 'Ali', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ali@gmail.com',
                'description'=>'any description of ali'
            ],
        ];
             return view('posts.edit', ["post" => $posts[$postId - 1]]);

    }
    public function delete($postId)
    {
        $posts = [
            [
                'id' => 1, 
                'title' => 'Laravel',
                'post_creator' => 'Ahmed', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ahmed@gmail.com',
                'description'=>'any description of ahmed '
            ],
            [
                'id' => 2, 
                'title' => 'PHP',
                'post_creator' => 'Mohamed',
                 'created_at' => '2022-04-16 10:37:00',
                 'email'=>'Mohamed@gmail.com',
                 'description'=>'any description of mohamed'
            ],
            [
                'id' => 3, 
                'title' => 'Javascript', 
                'post_creator' => 'Ali', 
                'created_at' => '2022-04-16 10:37:00',
                'email'=>'ali@gmail.com',
                'description'=>'any description of ali'
            ],
        ];
        foreach  ( $posts as $post) {
            if($post['id']==$postId){
                $posts=$post;
            }
        }
        return view('posts.delete',[
            'posts' => $posts,
        ]);
    }  
    public function destroy()
    {
        return 'we are in destroy';
    } 
}
