<?php

namespace App\Http\Controllers;

use App\Services\ViewDetails;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

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
        return view('ApiBazzar',['item' => $apiData['data'][0]]);
    }
}
