<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function llamarIndex()
{
    $client = new Client();

    try {
        $response = $client->get('http://127.0.0.1:8000/api/categorias');
        $categorias = json_decode($response->getBody(), true);

        return view ('dashboard/categories.index',[
            "categories" =>$categories 
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al consumir la API'], 500);
    }
}

}
