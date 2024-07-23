<?php

namespace App\Controllers;

use App\Core\BaseController;

use Saidqb\CorePhp\ResponseCode;

class Auth extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        
        $this->initResponse()->hide(['password']);

    }

    public function login()
    {
        $data = [
            'test' => 'login',
            'abc' => '123',
        ];
        
        return $this->response($data, ResponseCode::HTTP_OK);
    }
}
