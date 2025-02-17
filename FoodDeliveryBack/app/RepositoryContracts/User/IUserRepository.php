<?php
namespace App\RepositoryContracts\User;


use App\Models\User;

interface IUserRepository{

    public function CreateAccount(User $user);

}