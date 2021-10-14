<?php


namespace App\Services;

class ViewDetails
{

    public function getDetails($uuid)
    {
        $ch = curl_init();
        $url = config("global.base_url").config("global.category_endpoint").$uuid;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($ch), true);
        return $response;
    }
}
