<?php

namespace App\Http\Controllers;

use App\Services\ListProducts;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public $apiCall;
    public function __construct(ListProducts $apiCall)
    {
        $this->apiCall = $apiCall;
    }
    

    public function listApi()
    {
        $apiData = $this->apiCall->getApiData();
        try{
            
                return view('welcome', ['productList' => $apiData['data']]);
            
        }
        catch(Exception $e){
            return view("error",["error"=>$apiData]);
        }
    }
}
