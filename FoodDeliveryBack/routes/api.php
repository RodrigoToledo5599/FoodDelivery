<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::get('/home',[HomeController::class, 'LoadHomePage'])->middleware("auth:api");
Route::get('/prato/{id}',[HomeController::class, 'PickAPrato'])->middleware("auth:api");
Route::post('/login',[AuthController::class, 'Login']);
Route::post('/create-account',[UserController::class, 'CreateAccount']);














#testing stuff =================================================================================
Route::get('/anything',function(){ return "piruleiba";});
Route::get('/test',[AuthController::class, 'TestAuth'])->middleware('auth:api');
Route::post('/testing-redis',[PedidosController::class, 'TestingRedis']);
Route::get('/testing-pubsub', function(){
    $redis = Redis::connection("default");
    $redis->publish('test-channel', json_encode([
        'name' => 'Adam Wathan'
    ]));
});
Route::get('/testing-pubsub-with-events',function(){
    $redis = Redis::connection("default");
    $redis->publish('test-channel', "AAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
    // $redis->publish('test-channel');
});

#===============================================================================================
