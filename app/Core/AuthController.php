<?php

namespace App\Core;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

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

    /**
     * @var AuthConfig
     */
    protected $config;

    /**
     * @var Session
     */
    protected $session;



    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth   = service('authentication');

    }

    
}
