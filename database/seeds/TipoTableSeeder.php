<?php

use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Tipo::create([
          'tipoViagem' => 'viagem criada',
        ]);

        \App\Tipo::create([
          'tipoViagem' => 'pedido viagem',
        ]);

        \App\User::create([
          'name' => 'emanuel',
          'email' => 'emanuel@mail',
          'password' => '123123'
        ]);
        \App\User::create([
            'name' => 'leo',
            'email' => 'leo@mail',
            'password' => '123123'
        ]);
    }
}
