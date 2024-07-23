<?php

namespace App\Core;


/**
 * Class AuthController
 *
 * AuthController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends AuthController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class AuthController extends BaseController
{

    protected $auth;
    
    public function __construct()
    {
        parent::__construct();

        $this->auth  = service('authentication');

    }

}
