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
        return response()->json($post);
    }

    public function crearPost(Request $request)
    {
        $post = new Post();
        $post->name=$request->input('name');
        $post->category_id=$request->input('category_id');
        $post->description=$request->input('description');
        $post->status=$request->input('status');
        $post->save();
        return response()->json(['message' => 'Post creada con éxito', 'post' => $post], 201);
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
        return response()->json(['message' => 'Post eliminada éxito'], 201);
    }

    
    public function modificarPost(Request $request)
    {
        $post = Post::find($request->input('id'));
        $post->name=$request->input('name');
        $post->category_id=$request->input('category_id');
        $post->description=$request->input('description');
        $post->status=$request->input('status');
        $post->save();
        return response()->json(['message' => 'Post modificada con éxito', 'Post' => $post], 201);
    }

}
