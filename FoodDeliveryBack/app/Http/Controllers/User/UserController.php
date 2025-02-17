<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function CreateAccount(Request $request){
        $userServ = new UserServices();
        $response = $userServ->CreateAccount(
                                          $request['name'],
                                          $request['email'], 
                                          $request['endereco'], 
                                          $request['telefone'], 
                                          $request['password'],
                                        );
        return $response;
    }    

}
