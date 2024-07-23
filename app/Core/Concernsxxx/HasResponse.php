<?php

namespace App\Core\Concerns;

use Saidqb\CorePhp\Response;
use Saidqb\CorePhp\ResponseCode;

trait HasResponse
{
    protected $res;
    
    public function initResponse()
    {
        $this->res = new Response();

        return $this->res;
    }

    public function response($data, $code = ResponseCode::HTTP_OK, $message = ResponseCode::HTTP_OK_MESSAGE, $errorCode = 0)
    {
        $this->res->response($data, $code, $message, $errorCode)->send();
    }
}
