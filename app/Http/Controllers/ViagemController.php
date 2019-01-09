<?php

namespace App\Http\Controllers;

use App\Viagem;
use Illuminate\Http\Request;
use App\Http\Requests\ViagemCreateRequest;
use App\Http\Requests\ViagemUpdateRequest;
use Validator;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

use App\Produto;

class ViagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viagem = Viagem::all();
        return $viagem;
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
    public function store(ViagemCreateRequest $request)
    {
        //
        $dataViagem = $request->only(['origem', 'destino', 'dataInicio', 'dataFim', 'horaInicio', 'horaFim', 'user_id', 'tipo_id']);
        $dataViagem['estado'] = 'pendente';

        // return Response(['teste'=>$request->tipo_id]);
        if($request->tipo_id == 2){
            $dataProduto = $request->only(['peso', 'preco', 'tamanho', 'nome']);
            $produto = Produto::create($dataProduto);
            $dataViagem['produto_id'] = $produto->id;
            $viagem = Viagem::create($dataViagem);
            return Response([
              'status' => 0,
              'dataViagem' => $viagem,
              'dataProduto' => $produto,
              'msg' => 'ok'
            ], 200);
        }
        $viagem = Viagem::create($dataViagem);
        return Response([
          'status' => 0,
          'dataViagem' => $viagem,
          'msg' => 'ok'
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function show(Viagem $viagem)
    {
        //
        return $viagem;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Viagem $viagem)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function update(ViagemUpdateRequest $request, Viagem $viagem)
    {
        //
        $data = $request->only(['estado']);

        $viagem->estado = $data['estado'];
        $viagem->save();

        return Response([
          'status' => 0,
          'data' => $viagem,
          'msg' => 'ok'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viagem $viagem)
    {
        //
        Viagem::destroy($viagem['id']);
        return Response([
          'status' => 0,
          'data' => $viagem,
          'msg' => 'ok'
        ], 200);
    }

    public function search(Request $request){
        $listaViagens = DB::table('viagems')
        ->where('tipo_id', 1)
        ->where('origem', $request->origem)
        ->where('destino', $request->destino)
        ->where('dataInicio', $request->dataInicio)
        ->where('dataFim', $request->dataFim)
        ->where('horaInicio', $request->horaInicio)
        ->where('horaFim', $request->horaFim)->get();

        return Response(array('listaViagens' => $listaViagens));
    }
}
