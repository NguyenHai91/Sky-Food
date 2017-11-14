<?php

namespace App\Controllers\Publics;

use App\Models\Account;
use Core\App;

class UserController
{
    public function __construct()
    {
        $this->account = new Account();
    }

    public function index()
    {

        $detailUser = $this->account->detailUser();
        return view('public/user/index', compact('detailUser'));
    }

    public function editUser()
    {
        $this->account->updateUserInfo();
        $_SESSION['notice_edit'] = 'Sửa thông tin thành công!';
    }

    public function viewEditPassword()
    {
        $detailUser = $this->account->detailUser();
        return view('public/user/changePassword', compact('detailUser'));
    }

    public function editUserPassword()
    {
        $this->account->editUserPassword();
        $_SESSION['notice_edit'] = 'Sửa mật khẩu thành công!';
    }

    public function editUserImage()
    {
        $this->account->editUserImage();
    }

    public function viewSaveShop()
    {
        $saveShop = $this->account->saveShopId();
        return view('public/user/saved', compact('saveShop'));
    }
}
