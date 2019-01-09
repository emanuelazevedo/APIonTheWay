<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    //
    protected $fillable = ['origem', 'destino', 'dataInicio', 'dataFim', 'horaInicio', 'horaFim', 'estado', 'user_id', 'produto_id', 'tipo_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
