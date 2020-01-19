<?php

namespace Quetface\Laravel\Facades;

/**
 * @method Quetface\Facebook\Facebook facebook($accessToken = null)
 * @method Quetface\Scan\Scan scan($scanKey = null)
 * @method Quetface\SpeedSms\SpeedSms sms($accessKey = null)
 */
class Quetface extends \Illuminate\Support\Facades\Facade
{
    protected function getFacadeAccessor()
    {
        return 'quetface';
    }
}
