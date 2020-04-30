<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function addView()
    {
        return view('categorias.add');
    }

    public function store()
    {
        $allData = request()->all();
        $todo = new Categorias();

        $todo->name = $allData['name'];
        $todo->description = $allData['description'];
        $todo->save();

        return redirect('/home');
    }

    public function list()
    {
        $categorias = Categorias::all();

        return view('categorias.listar', ['categorias' => $categorias]);
    }
}
