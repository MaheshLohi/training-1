<?php

namespace  App\Services;

use ApiHelpers;

class LoginServices
{

    public $apihelper;

    public function __construct(ApiHelpers $apihelper)
    {
        $this->apihelper = $apihelper;
    }

    public function loginApi()
    {

        $url =  config('global.base_url') . 'login';
        $data = array("email" => "anandhuks0@gmail.com", "password" => array(
            "ct" => "zyeib3uuUnTqR3Zf1oL3vg==",     "iv" => "42925de56071ba11bb984cc8bfbcf350",    "s" => "3b914d6469e30320"
        ), "user_type" => "2", "login_type" => "0");
        $postdata = json_encode($data);
        $header = array('Content-Type: application/json');


        return  $this->apihelper->postCall($url, $header, $postdata);
    }


    public function logoutApi($email, $token)
    {

        $url = config('global.base_url');
        $params = "logout?email=$email&Authorization=$token";
        $response = $this->apihelper->getCall($url, $params);


        return $response['message'];
    }
}
