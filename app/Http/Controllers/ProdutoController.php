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
     * Listar todos os Produtos
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
     * Criar um Produto
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
     * Mostrar um Produto
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
     * Editar um Produto
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
     * Remover um Produto
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
