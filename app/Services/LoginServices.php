<?php

namespace  App\Services;

class LoginServices
{

    public function loginApi()
    {
        $ch = curl_init();
        $url = 'https://npci-qa-api.open.money/api/consumer/login';

        $data = array("email" => "anandhuks0@gmail.com", "password" => array(
            "ct" => "zyeib3uuUnTqR3Zf1oL3vg==",     "iv" => "42925de56071ba11bb984cc8bfbcf350",    "s" => "3b914d6469e30320"
        ), "user_type" => "2", "login_type" => "0");

        $postdata = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);
        // print_r($result);
        return json_decode($result);
    }
}
