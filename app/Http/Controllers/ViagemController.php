<?php

namespace App\Http\Controllers;

use App\Viagem;
use Illuminate\Http\Request;
use App\Http\Requests\ViagemCreateRequest;
use App\Http\Requests\ViagemUpdateRequest;
use Validator;

use Illuminate\Support\Facades\DB;

use App\Produto;
use Image;

class ViagemController extends Controller
{
    /**
     * Listar todas as Viagens
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viagens = Viagem::all();
        $viagem = array();
        foreach($viagens as $trip){
            $trip->tipo;
            $trip->produto;
            $viagem[] = $trip;
        }

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
     * Criar uma Viagem
     * 
     * @bodyParam origem string required Origem da viagem
     * @bodyParam destino string required Destino da viagem
     * @bodyParam dataInicio date required Data de inicio da viagem
     * @bodyParam dataFim date required Data de fim da viagem
     * @bodyParam horaInicio time required Hora de inicio da viagem
     * @bodyParam horaFim time required Hora de fim da viagem
     * @bodyParam user_id integer required Criador da viagem
     * @bodyParam tipo_id integer required Tipo de viagem
     * @bodyParam tamanho string Tamanho do produto caso seja pedido de viagem
     * @bodyParam nome string Nome do produto caso seja pedido de viagem
     * @bodyParam foto file Foto do produto caso seja pedido de viagem
     * @bodyParam preco integer Preco da viagem caso seja viagem criada
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViagemCreateRequest $request)
    {
        //
        $dataViagem = $request->only(['origem', 'destino', 'dataInicio', 'dataFim', 'horaInicio', 'horaFim', 'user_id', 'tipo_id']);
        $dataViagem['estado'] = 'pendente';

        // pedido de viagem
        if($request->tipo_id == 2){
            $dataProduto = $request->only(['tamanho', 'nome']);

            $produto = Produto::create($dataProduto);

            if($request->hasFile('foto')){
                $foto = $request->file('foto');
                $filename = time() . "." . $foto->getClientOriginalExtension();
                Image::make($foto)->resize(300, 300)->save(public_path('uploads/produtos' . $filename));
                
                $produto->foto = $filename;
                $produto->save();
            }

            $dataViagem['produto_id'] = $produto->id;
            $viagem = Viagem::create($dataViagem);
            return Response([
              'status' => 0,
              'dataViagem' => $viagem,
              'dataProduto' => $produto,
              'msg' => 'ok'
            ], 200);
        }
        // viagem criada
        $dataViagem['preco'] = $request->input('preco');
        $viagem = Viagem::create($dataViagem);
        return Response([
          'status' => 0,
          'dataViagem' => $viagem,
          'msg' => 'ok'
        ], 200);

    }

    /**
     * Mostrar uma Viagem
     *
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function show(Viagem $viagem)
    {
        //
        $viagem->tipo;
        $viagem->produto;
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
     * Editar uma Viagem
     * 
     * @bodyParam estado required string Estado da viagem
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function update(ViagemUpdateRequest $request, Viagem $viagem)
    {
        //
        //estados sao: pendente, em viagem, concluido, avaliada
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
     * Remover uma Viagem
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


    /**
     * Pesquisar por Viagens
     * 
     * @bodyParam origem string required Origem da viagem
     * @bodyParam destino string required Destino da viagem
     * @bodyParam dataInicio date required Data de inicio da viagem
     * @bodyParam dataFim date required Data de fim da viagem
     * @bodyParam horaInicio time required Hora de inicio da viagem
     * @bodyParam horaFim time required Hora de fim da viagem
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
