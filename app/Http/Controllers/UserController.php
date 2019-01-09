<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserCreateRequest;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    //
    public function _constructor(){
      $this->middleware('auth:api');
    }

    /**
     * Listar todos os Users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return $users;
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
     * Criar um User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //

        $data = $request->only(['name', 'email', 'password']);

        // $validator = Validator::make($data,
        // [
        //   'name' => 'required|max:225',
        //   'email' => 'required|email|unique:users',
        //   'password' => 'required|min:3',
        // ],
        // [
        //   'name.required' => 'O campo nome é obrigatorio',
        // ]);
        //
        // if($validator->fails()){
        //   return Response([
        //     'status' => 1,
        //     'data' =>  $validator->errors()->all(),
        //     'msg' => 'error'
        //   ], 400);
        // }

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        return Response([
          'status' => 0,
          'data' => $user,
          'msg' => 'ok'
        ], 200);
        // return User::create($data);

    }

    /**
     * Mostrar um User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $articles = $user->article;
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Editar um User
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        //
        // return Response(['teste' => 'oi']);
        $data = $request->only(['name', 'email', 'password']);


        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return Response([
          'status' => 0,
          'data' => $user,
          'msg' => 'ok'
        ], 200);

    }

    /**
     * Remover um User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user['id']);
        return Response([
          'status' => 0,
          'data' => $user,
          'msg' => 'ok'
        ], 200);

    }

    public function getAuthUser(){
      return Auth::user();
    }
}
