<?php

namespace App\Http\Controllers;

use App\Services\LoginServices;
use Exception;
// use Illuminate\Http\Request;

class LoginController extends Controller
{

    public $apiCall;
    public function __construct(LoginServices $apiCall)
    {
        $this->apiCall = $apiCall;
    }


    public function login()
    {



        $user = $this->apiCall->loginApi();
        try {
            session(['user' => $user['data']]);
           
            return redirect('/profile');
        } catch (Exception $e) {
            return view('error', ['error' => 'Unable to login please try after sometime']);
        }
    }


    public function logout()
    {

        $user = session('user');
        try {
            $response = $this->apiCall->logoutApi($user['email'], $user['token']);
            if ($response === 'Logged out successfully') {
                session()->forget('user');
                session()->flush();
                return redirect()->back();
            }
            return view('error', ['error' => 'An error occured']); 
        } catch (Exception $e) {
            return view('error', ['error' => 'An error occured']);
        }
    }

    public function userHome()
    {
        if (!session('user')) {
            return redirect('/login');
        } else {
            $userData = session('user');
            return view('user_home', ['user' => $userData]);
        }
    }
}
