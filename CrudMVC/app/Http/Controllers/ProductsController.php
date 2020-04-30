<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addView()
    {
        return view('products.add');
    }

    public function store()
    {
        $allData = request()->all();
        $todo = new Products();

        $todo->name = $allData['name'];
        $todo->description = $allData['description'];
        $todo->price = $allData['price'];
        $todo->save();

        return redirect('/home');
    }

    public function list()
    {
        $produtos = Products::all();

        return view('products.listar', ['produtos' => $produtos]);
    }
}
