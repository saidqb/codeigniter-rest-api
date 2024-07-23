<?php

namespace App\Controllers;

use App\Core\BaseController;

use Saidqb\CorePhp\ResponseCode;
use Saidqb\CodeigniterSupport\QueryFilter;

class Auth extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        
        $this->initResponse()->hide(['password']);

    }

    public function login()
    {
        
        $data['item'] = [
            'test' => 'login',
            'abc' => '123',
        ];

        $data['token'] = '1234567890';
        
        return $this->response($data, ResponseCode::HTTP_OK);
    }
}
