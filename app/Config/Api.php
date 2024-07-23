<?php

namespace Config;

class Api
{
    public static $apiKey = 'a8f4127f3f89da00033f1b9f0617991c66d8fcb716a09f8a7aa21e1816b0e5f2';


    /**
     * sqlMode
     * list of sqlMode that will be disabled
     * default database sqlMode:
     * ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION
     *
     */

    public static $sqlMode = [
        /**
         * enable : array of sqlMode that will be disabled
         * ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION
         */
        'enable' => [
            'ONLY_FULL_GROUP_BY',
        ],

        /**
         * enable_in : array of controller that will enable this sqlMode
         */
        'enable_in' => [
            'App\Controllers',
        ],
    ];

    /**
     * controllerEndpoint
     * list of controller that will be included or excluded
     * include : array of controller that will be included
     * exclude : array of controller that will be excluded
     */
    public static $controllerEndpoint = [
        'include' => [
            'App\Controllers',
        ],
        'exclude' => [
            'App\Controllers\Auth',
        ],
    ];


    public static function headerControl()
    {
        date_default_timezone_set("Asia/Jakarta");

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization, Token");
        header("Access-Control-Allow-Methods: GET, POST");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }
}
