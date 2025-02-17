<?php
namespace App\Repository;

use App\RepositoryContracts\IPratosRepository;
use Illuminate\Support\Facades\DB;

class PratosRepository implements IPratosRepository{
    public function PickPrato($idPrato){
        $prato = DB::table('pratos')->where('id',$idPrato)->first();
        return $prato;
    }

    public function GetAllPratos(){
        $pratos = DB::table('pratos')->get();
        return $pratos;
    }


}