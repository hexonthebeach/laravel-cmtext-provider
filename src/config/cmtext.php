<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CM.com Api Key
    |--------------------------------------------------------------------------
    |
    | This option defines the Api Key to authenticate
    | against the CM.com Messaging gateway api.
    |
    */

    'api_key' => env('CM_API_KEY', 'api-key-not-found-in-config'),

    /*
    |--------------------------------------------------------------------------
    | Gateway *optional
    |--------------------------------------------------------------------------
    |
    | With this setting you can control the gateway that is used. We have
    | gateways around the world, using one other than the default one
    | could help against latency or local regulatory boundaries.
    |
    */

    'gateway' => env('CM_GATEWAY', CMText\Gateways::GLOBAL),

];