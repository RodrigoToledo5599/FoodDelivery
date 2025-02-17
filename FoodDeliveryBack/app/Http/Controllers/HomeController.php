<?php

namespace App\Http\Controllers;

use App\Services\Home\HomeServices;
use App\Services\Pratos\PickPratosServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $_homeServices;
    protected $_pickPratosServices;
    function __construct(
        HomeServices $homeServices,
        PickPratosServices $pickPratosServices
    ){
        $this->_homeServices = $homeServices;
        $this->_pickPratosServices = $pickPratosServices;
    }


    public function LoadHomePage(Request $request){
        return $this->_homeServices->LoadHomePageService();
    }

    public function PickAPrato($idPratos){
        return $this->_pickPratosServices->PickPratosService($idPratos);
    }
}
