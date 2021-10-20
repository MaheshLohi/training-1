<?php


namespace App\Services;

use ApiHelpers;

class ListProducts
{

    public $apiHelper;
    public function __construct(ApiHelpers $apiHelper)
    {
        $this->apiHelper = $apiHelper;
    }

    public function getApiData()
    {
        $url = config("global.base_url") . config('global.catalogue_endpoint');
        $header = array('Content-Type: application/json');

        
        return $this->apiHelper->postCall($url, $header, '');
    }
}
