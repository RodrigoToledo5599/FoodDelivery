<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;


class Entrega {

    protected $fillable = [
        'userId',
        'address',
        'price',
        'saiuParaEntrega',
    ];

    protected $table = 'entregas';

}
