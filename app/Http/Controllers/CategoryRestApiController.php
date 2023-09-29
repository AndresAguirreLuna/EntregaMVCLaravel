<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryRestApiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function crearCategory(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'description'=>'required|min:3|max:45',
        ]);
        $categories = new Category();
        $categories->name=$request->input('name');
        $categories->description=$request->input('description');
        $categories->save();
        return response()->json(['message' => 'Categoría creada con éxito', 'categoria' => $categories], 201);
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
        return response()->json(['message' => 'Categoría eliminada éxito'], 201);
    }

    
    public function modificarCategory(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'description'=>'required|min:3|max:45',
        ]);
        $category = Category::find($request->input('id'));
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->save();
        return response()->json(['message' => 'Categoría modificada con éxito', 'categoria' => $category], 201);
    }
}
