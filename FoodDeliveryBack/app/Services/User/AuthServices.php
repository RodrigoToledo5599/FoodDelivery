<?php
namespace App\Services\User;



use App\Repository\Auth\LoginRepository;


class AuthServices{



    public function LoginService($email,$password){
        $loginRepo = new LoginRepository();
        return $loginRepo->GenerateToken($email,$password);
    }


    public function testingAuth(){
        return "qiojqiwdjo";
    }









}



