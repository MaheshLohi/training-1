<?php


namespace App\Services;

class ListProducts
{

    public function getApiData()
    {
        $ch = curl_init();
        $url = config("global.base_url").config('global.catalogue_endpoint');
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,'');
        $response = json_decode(curl_exec($ch), true);
        return $response;
    }
}
