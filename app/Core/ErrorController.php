<?php

namespace App\Core;

use Saidqb\CorePhp\ResponseCode;


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
class ErrorController extends BaseController
{
    public function show404()
    {
        return $this->response(ResponseCode::HTTP_NOT_FOUND, ResponseCode::HTTP_NOT_FOUND_MESSAGE);
    }
}
