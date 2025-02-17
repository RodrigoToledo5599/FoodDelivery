<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;






class PedidosController extends Controller{

    public function TestingRedis(){
        $redis = Redis::connection("default");
        $redis->set('3', 'AAAAAAAAAAAAAAbbbbbbbbbbbbb');
        return "done";
    }
    
    




}
