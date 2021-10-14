<?php

namespace App\Http\Controllers;

use App\Services\ListProducts;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public $apiCall;
    public function __construct(ListProducts $apiCall)
    {
        $this->apiCall = $apiCall;
    }
    //

    public function listApi()
    {
        $apiData = $this->apiCall->getApiData();
        //print_r($apiData['data']);
        if($apiData)return view('welcome', ['productList' => $apiData['data']]);
        else abort(404);
    }
}
