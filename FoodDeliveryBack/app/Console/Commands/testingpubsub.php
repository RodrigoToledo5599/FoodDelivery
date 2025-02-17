<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class testingpubsub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:testingpubsub';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'testando se essa bagaça funciona msm';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $redis = Redis::connection("default");
        $redis->subscribe('test-channel', function(){
            echo("dawdawdaw");
            // return $message;
        });
    }
}
