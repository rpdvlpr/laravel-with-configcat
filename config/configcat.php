<?php

return array(

    /*
    |--------------------------------------------------------------------------
    |   Your ConfigCat API key
    |--------------------------------------------------------------------------
    |   As set in the ConfigCat administration page
    |
    */
    'api_key'                => env('CONFIGCAT_API_KEY'),

    /*
     |--------------------------------------------------------------------------
     |   The logger implementation to use
     |--------------------------------------------------------------------------
     |   Defaults to Laravel Logger
     |
     */
    'logger'                 => '\Illuminate\Log\Logger',

    /*
     |--------------------------------------------------------------------------
     |   The cache implementation to use
     |--------------------------------------------------------------------------
     |   Defaults to LaravelCache implemented in the ConfigCat php-sdk
     |
     */
    'cache'                  => '\ConfigCat\Cache\LaravelCache',

    /*
     |--------------------------------------------------------------------------
     |   The cache implementation to use
     |--------------------------------------------------------------------------
     |   Defaults to LaravelCache implemented in the ConfigCat php-sdk
     |
     */
    'cache-refresh-interval' => env('CONFIGCAT_CACHE_REFRESH_INTERVAL', 60),

    /*
     |--------------------------------------------------------------------------
     |   Sets the refresh interval of the cache in seconds
     |--------------------------------------------------------------------------
     |   After the initial cached value is set this value will be used
     |   to determine how much time must pass before initiating a new
     |   configuration fetch request. Defaults to 60.
     |
     */
    'timeout'                => env('CONFIGCAT_REQUEST_TIMEOUT', 30),

    /*
     |--------------------------------------------------------------------------
     |   Sets the default http request timeout in seconds.
     |--------------------------------------------------------------------------
     |   Defaults to 10.
     |
     */
    'connect-timeout'        => env('CONFIGCAT_CONNECT_TIMEOUT', 10),
);
