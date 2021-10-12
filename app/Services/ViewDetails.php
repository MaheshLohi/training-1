<?php


namespace App\Services;

class ViewDetails
{

    public function getDetails($uuid)
    {
        $ch = curl_init();
        $url = 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($ch), true);
        return $response;
    }
}
