<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoCreateRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use Validator;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produto = Produto::all();
        return $produto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoCreateRequest $request)
    {
        //

        $data = $request->only(['tamanho', 'preco', 'peso', 'nome']);
        $produto = Produto::create($data);
        return Response([
          'status' => 0,
          'data' => $produto,
          'msg' => 'ok'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
        return $produto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoUpdateRequest $request, Produto $produto)
    {
        $data = $request->only(['viagem_id']);

        $produto->viagem_id = $data['viagem_id'];
        $produto->save();

        return Response([
          'status' => 0,
          'data' => $produto,
          'msg' => 'ok'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
        Produto::destroy($produto['id']);
        return Response([
          'status' => 0,
          'data' => $produto,
          'msg' => 'ok'
        ], 200);
    }
}
