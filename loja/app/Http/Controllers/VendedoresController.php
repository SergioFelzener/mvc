<?php

namespace App\Http\Controllers;

use App\Vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Vendedores::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json = $request->getContent();

        return Vendedores::create(json_decode($json, JSON_OBJECT_AS_ARRAY));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor = Vendedores::find($id);

        if ($vendedor){
            return $vendedor;
        }else {
            return json_encode([$id => 'não existe']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendedor = Vendedores::find($id);
        if ($vendedor) {
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [$id => 'atualizado'] : [$id => 'erro'];
        }else {
            $ret = [$id => 'nao existe'];
        }
        return json_encode($ret);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedor = Vendedores::find($id);

        if ($vendedor){
            $ret = $vendedor->delete() ? [$id => 'apagado'] : [$id => 'erro'];
        }else {
            $ret = [$id = 'nao existe'];
        }
        return json_encode($ret);
    }

    public function checkVendedor(int $idVendedor): bool {
        $vendedores=[1 => 'Marcos', 2 => 'Ana', 3 => 'Lucas', 4 => 'Paulo'];

        return array_key_exists($idVendedor, $vendedores);
    }

    public function getVendedor(int $idVendedor): ? string {
        $vendedores=[1 => 'Marcos', 2 => 'Ana', 3 => 'Lucas', 4 => 'Paulo'];

        return $vendedores[$idVendedor] ?? null;
    }




}
