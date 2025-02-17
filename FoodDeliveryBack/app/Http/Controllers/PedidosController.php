<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;






class PedidosController extends Controller{

    public function TestingRedis(){
        $redis = Redis::connection("default");
        $redis->set('1', '2');
        $redis->
        return response("deu bom", 201);
    }
    
    




}
