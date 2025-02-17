<?php


namespace App\RepositoryContracts\Auth;


interface ILoginRepository{

    public function GenerateToken($email,$password): array;
    
}