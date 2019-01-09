<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['tamanho', 'peso', 'preco', 'foto', 'nome'];

    public function viagems()
    {
        return $this->hasMany(Viagem::class);
    }
}
