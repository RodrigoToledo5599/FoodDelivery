<?php
namespace App\Repository\Auth;

use App\RepositoryContracts\Auth\ILoginRepository;
use Auth;


class LoginRepository implements ILoginRepository{

    public function GenerateToken($email,$password) : array{
        if (Auth::attempt(["email" => $email, "password" => $password])) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->accessToken;
            return ["token"=>$token];
            // return 233.4 + 333;
        }
        else{
            return [
                "token" =>"usuario nao encontrado"
            ];
        }
    }








}
