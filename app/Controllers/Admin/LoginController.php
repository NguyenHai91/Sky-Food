<?php

namespace App\Controllers\Admin;

use App\Models\Account;
use Core\App;

class LoginController
{
    protected $account;

    public function __construct()
    {
        $this->account = new Account;
    }

    public function index()
    {
        return view('admin/login/index');
    }

    public function login()
    {
        $result = $this->account->login();
        if ('Admin' == $result) {
            return redirect('admin');
        } else if ('User' == $result) {
            return redirect('');
        } else {
            $_SESSION['notice_login'] = 'Sai Username hoặc Mật khẩu. Vui lòng đăng nhập lại!';
            redirect('');
        }
    }

    public function logout()
    {
        $this->account->logout();
        redirect('');
    }

    public function viewForgotPassword()
    {
        return view('admin/forgot/index');
    }

    public function forgotPassword()
    {
        $this->account->forgotPassword();
    }
}
