<?php

return [

    /**
     * Facebook account access token
     */
    'access_token' => env('FACEBOOK_ACCESS_TOKEN', ''),

    /**
     * Quetface API key
     */
    'scan_key' => env('QUETFACE_SCAN_KEY', ''),

    /**
     * Access token SpeedSMS API
     */
    'sms_key' => env('SPEED_SMS_SMS_KEY', '')
];