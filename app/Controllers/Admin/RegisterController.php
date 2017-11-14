<?php
namespace App\Controllers\Admin;

use App\Models\Account;

class RegisterController
{
    protected $account;

    public function __construct()
    {
        $this->account = new Account;
    }

    public function register()
    {
        $this->account->register();
    }
}
