<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ViewDetails;

class DetailsController extends Controller
{
    //


    
    public $apiCall;
    public function __construct(ViewDetails $apiCall)
    {
        $this->apiCall = $apiCall;
    }
    public function viewDetails($uuid)
    {
        $apiData = $this->apiCall->getDetails($uuid);
        if($apiData['data']){
            return view('ApiBazzar',['item'=>$apiData['data'][0]]);
        }return view('ApiBazzar',['message'=>"No data found"]);
    }
}
