<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostRestApiController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view ('Post.IndexPost',[
            "post" =>$post
        ]);
    }

    public function crearPost(Request $request)
    {
        $post = new Post();
        $post->name=$request->input('name');
        $post->category_id=$request->input('category_id');
        $post->description=$request->input('description');
        $post->status='Post';
        $post->save();

        $post = Post::all();
        return view ('Post.IndexPost',[
            "post" =>$post
        ]);
     }


    public function buscarById($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function borrarPost($id)
    {
        $post = Post::find($id);
        $post->delete();

        $post = Post::all();
        return view ('Post.IndexPost',[
            "post" =>$post
        ]);
        
    }

    
    public function modificarPost(Request $request)
    {
        $post = Post::find($request->input('id'));
        $post->name=$request->input('name');
        $post->category_id=$request->input('category_id');
        $post->description=$request->input('description');
        $post->status='Post';
        $post->save();

        $post = Post::all();
        return view ('Post.IndexPost',[
            "post" =>$post
        ]); }


        public function edit($id)
        {
            $post=Post::find($id);
            return view ('Post.EditarPost', ['postEdit'=>$post]);
        }

}
