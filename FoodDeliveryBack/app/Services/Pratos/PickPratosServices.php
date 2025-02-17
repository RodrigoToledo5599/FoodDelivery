<?php

namespace App\Services\Pratos;

use App\Repository\PratosRepository;


class PickPratosServices{

    protected $_pratosRepo;
    function __construct(PratosRepository $pratosRepo){
        $this->_pratosRepo = $pratosRepo;
    }


    public function PickPratosService($idPrato){
        $pratos = $this->_pratosRepo->PickPrato($idPrato);
        return $pratos;
    }

    public function ChoosePedidoService($idPrato,$idUser){
        
    }
}
