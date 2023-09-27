<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryRestApiController extends Controller
{
    public function index()
    {
        $stringsList = [
            [
                'titulo' => 'Libro 1',
                'autor' => 'Autor 1',
            ],
            [
                'titulo' => 'Libro 2',
                'autor' => 'Autor 2',
            ],
        ];
        return response()->json($stringsList);
    }
}
