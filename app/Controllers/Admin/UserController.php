<?php

namespace App\Controllers\Admin;

use app\Models\Account;
use Core\App;

class UserController
{
    protected $account;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if ($_SESSION['user']->ROLE < 3) {
            $this->account = new Account;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {

        $users = $this->account->searchUser();

        return view('admin/user/index', compact('users'));
    }

    public function addUser()
    {
        if (1 == $_SESSION['user']->ROLE) {
            return view('admin/user/add');
        } else {
            $_SESSION['notice'] = 'Bạn không có quyền truy cập trang này';
            redirect('admin/user');
        }
    }

    public function storeUser()
    {
        $this->account->addUser();
    }

    public function editUser()
    {
        $infoUser = $this->account->getUser($_GET['idUser']);

        return view('admin/user/edit', compact('infoUser'));
    }

    public function updateUser()
    {
        $this->account->updateUser();
    }

    public function deleteUser()
    {
        $this->account->deleteUser();
        return redirect('admin/user');
    }

    public function searchUser()
    {
        $this->account->searchUser();
    }

    public function checkUser()
    {
        $this->account->checkUserAlready();
    }

    public function loadImages()
    {
        $this->account->loadImages();
    }
}
