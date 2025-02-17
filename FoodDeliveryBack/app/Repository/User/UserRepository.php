<?php
namespace App\Repository\User;

use App\RepositoryContracts\User\IUserRepository;
use Illuminate\Support\Facades\Hash;


use App\Models\User;


class UserRepository implements IUserRepository{

    public function CreateAccount(User $user){
        $user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'endereco' => $user->endereco,
            'telefone' => $user->telefone,
            'password' => Hash::make($user->password),
        ]);
        return $user['name'] . " foi criado";
    }



    
}