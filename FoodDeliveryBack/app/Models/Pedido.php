<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;


class Pedido{

    protected $fillable = [
        'entregaId',
        'pratoId',
        'userId'
    ];

    protected $table = 'pedidos';

}
