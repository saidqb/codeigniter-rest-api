<?php

namespace App\Controllers;

use App\Core\BaseController;

class UserRole extends BaseController
{
    public function index(): string
    {
        return 'Index';
    }

    public function store(): string
    {
        return 'Store';
    }

    public function show(): string
    {
        return 'Show';
    }

    public function update(): string
    {
        return 'Update';
    }

    public function destroy(): string
    {
        return 'Destroy';
    }
}
