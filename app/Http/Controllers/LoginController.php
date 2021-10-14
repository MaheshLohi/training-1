<?php

namespace App\Http\Controllers;

use App\Services\LoginServices;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public $apiCall;
    public function __construct(LoginServices $apiCall)
    {
        $this->apiCall = $apiCall;
    }
    public function login(){

       $user=$this->apiCall->loginApi();
       
      return view('user_home',['userdetails'=>$user]);
       

    }

}
