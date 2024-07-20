<?php

namespace App\Controllers;

use App\Core\BaseController;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
