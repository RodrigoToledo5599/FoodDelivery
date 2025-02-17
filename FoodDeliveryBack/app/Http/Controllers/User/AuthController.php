<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\AuthServices;
use Illuminate\Http\Request;



class AuthController extends Controller
{
    protected $_authServices;
    function __construct(
        AuthServices $authServices,

    ){
        $this->_authServices = $authServices;
    }



    public function Login(Request $request){
        return $this->_authServices->LoginService($request["email"],$request["password"]);
    }

    public function TestAuth(Request $request){
        return $this->_authServices->testingAuth();
    }


}
