<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryRestApiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view ('Category.IndexCategory',[
            "categories" =>$categories
        ]);
    }

    public function crearCategory(Request $request)
    {
        $category = new Category();
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->save();
        
        $categories = Category::all();
        return view ('Category.IndexCategory',[
            "categories" =>$categories
        ]);
    }

    public function buscarById($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function borrarCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        
        $categories = Category::all();
        return view ('Category.IndexCategory',[
            "categories" =>$categories
        ]);}

    
    public function modificarCategory(Request $request)
    {
        $category = Category::find($request->input('id'));
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->save();
        
        $categories = Category::all();
        return view ('Category.IndexCategory',[
            "categories" =>$categories
        ]);
}

    public function edit($id)
    {
        $category=Category::find($id);
        return view ('Category.EditCategory', ['categoriaEdit'=>$category]);
    }
}
