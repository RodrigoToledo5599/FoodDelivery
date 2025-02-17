<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;


class EntregaTerminada {

    protected $fillable = [
        'userId',
        'address',
        'price',
        'entregaCancelada'
    ];

    protected $table = 'entregas_terminadas';

}
