<?php 
namespace App\RepositoryContracts;


interface IPratosRepository{
    public function PickPrato($idPrato);
    public function GetAllPratos();
}