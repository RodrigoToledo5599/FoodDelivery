<?php
namespace App\Services\User;

use App\Repository\User\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserServices{

    public function CreateAccount($name, $email, $endereco, $telefone, $password){
        $userRepo = new UserRepository();
        $user = new User();

        $user['name'] = $name;
        $user['email'] = $email;
        $user['endereco'] = $endereco;
        $user['telefone'] = $telefone;
        $user['password'] = $password;

        return $userRepo->CreateAccount($user);
        
    }



}