<?php 
namespace App\RepositoryContracts;



interface IPedidoRepository{

    public function MakePedido(string $idUser, string $idPrato);


}