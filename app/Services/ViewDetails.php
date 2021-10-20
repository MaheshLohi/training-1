<?php


namespace App\Services;

use ApiHelpers;

class ViewDetails
{

    public $apiHelper;
    public function __construct(ApiHelpers $apiHelper)
    {
        $this->apiHelper = $apiHelper;
    }
    public function getDetails($uuid)
    {

        $url = config("global.base_url") . config("global.category_endpoint");
        $params = $uuid;

        return $this->apiHelper->getCall($url, $params);
    }
}
