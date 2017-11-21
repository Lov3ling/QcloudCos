<?php

namespace Lee\QcloudCos;

use QCloud\Cos\Api;

class Cos extends Api
{
    private $api;

    public function Api()
    {
        return $this->api;
    }
    public function __construct($config)
    {
        $this->api=new Api($config);
    }

}