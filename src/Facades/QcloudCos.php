<?php

namespace Lee\QcloudCos\Facades;

use Illuminate\Support\Facades\Facade;

class QcloudCos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qcloudcos';
    }
}