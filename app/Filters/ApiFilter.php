<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Saidqb\CorePhp\Response;
use Saidqb\CorePhp\ResponseCode;
use Config\Api as ApiConfig;

class ApiFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        ApiConfig::headerControl();

        if (ApiConfig::$apiKey != $request->getHeaderLine('api-key')) {
            Response::make()->response(ResponseCode::HTTP_UNAUTHORIZED, ResponseCode::HTTP_UNAUTHORIZED_MESSAGE, 1)->send();
        }
    }

    /**
     * @param array|null $arguments
     *
     * @return void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
