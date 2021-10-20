<?php

class ApiHelpers
{
    public function postCall($url, $headers, $payload)
    {

        $url = $url;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = json_decode(curl_exec($ch), true);
        return $response;
    }



    public function getCall($url, $params)
    {
        $ch = curl_init($url . $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($ch), true);
        if (!curl_error($ch)) {
            return $response;
        } else return curl_error($ch);
    }
}
