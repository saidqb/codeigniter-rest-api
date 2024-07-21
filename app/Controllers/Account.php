<?php

namespace App\Controllers;

use App\Core\BaseController;

class Account extends BaseController
{

    public function profile(): string
    {
        return 'Profile';
    }

    public function security(): string
    {
        return 'Security';
    }

    public function reset_password(): string
    {
        return 'Reset Password';
    }

    public function settings(): string
    {
        return 'Settings';
    }

    public function notifications(): string
    {
        return 'Notifications';
    }
}
