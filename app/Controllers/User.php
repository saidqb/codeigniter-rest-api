<?php

namespace App\Controllers;

use App\Core\BaseController;

use Saidqb\CorePhp\ResponseCode;
use Saidqb\CodeigniterSupport\QueryFilter;

class User extends BaseController
{
    

    public function index(): string
    {
        $queryFilter = QueryFilter::make()
            ->select(['*'])
            ->search([
                'username',
                'email',
            ])
            ->request($this->input())
            ->query($this->db->table('users'));

        return $this->response($queryFilter->get(), ResponseCode::HTTP_OK);
    }

    public function store()
    {
        return $this->response($this->input(), ResponseCode::HTTP_OK);
    }

    public function show($id = null)
    {
        return $this->response([$id], ResponseCode::HTTP_OK);
    }

    public function update($id = null)
    {
        return $this->response([$id], ResponseCode::HTTP_OK);
    }

    public function destroy($id = null)
    {
        return $this->response([$id], ResponseCode::HTTP_OK);
    }
}
