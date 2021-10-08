<?php


namespace App\Services;

class ListProducts
{

    public function getApiData()
    {
        $ch = curl_init();
        $url = 'https://npci-qa-api.open.money/api/consumer/get-catalogues-for-category';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,'');
        $response = json_decode(curl_exec($ch), true);
        return $response;
    }
}
