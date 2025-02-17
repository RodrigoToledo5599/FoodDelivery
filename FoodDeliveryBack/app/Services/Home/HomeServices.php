<?php

namespace App\Services\Home;

use App\Repository\Auth\LoginRepository;
use App\Repository\PratosRepository;


class HomeServices{
    protected $_pratoRepo;
    protected $_loginRepo;
    function __construct(LoginRepository $loginRepo,
                         PratosRepository $pratoRepo){
        $this->_loginRepo = $loginRepo;
        $this->_pratoRepo = $pratoRepo;
    }

    public function LoadHomePageService(){
        $pratos = $this->_pratoRepo->GetAllpratos();
        return $pratos;
    }

    // public function LoadHomePageService(string $email, string $password){
    //     $token = $this->_loginRepo->GenerateToken($email,$password);
    //     if (isset($token["token"])){
    //         $pratos = $this->_pratoRepo->GetAllpratos();
    //         return [
    //                 "token" => $token["token"],
    //                 "pratos" => $pratos,
    //                ];
    //     }
    //     return "deu nao ";
    // }


}
