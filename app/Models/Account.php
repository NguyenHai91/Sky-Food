<?php

namespace App\Models;

use App\Mailer\Mailer;
use App\Models\Model;
use App\Models\Shop;

class Account extends Model
{

    protected $table = 'ACCOUNT';
    protected $primaryKey = 'USERNAME';
    protected $fillable = [];

    public function setValue($password, $fisrtname, $lastname, $address, $image, $email, $role, $phone)
    {
        $this->fillable = [
            'PASSWORD' => $password,
            'FIRST_NAME' => $fisrtname,
            'LAST_NAME' => $lastname,
            'ADDRESS' => $address,
            'IMAGE' => $image,
            'EMAIL' => $email,
            'FULL_NAME' => $lastname . ' ' . $fisrtname,
            'ROLE' => ('' == $role) ? 3 : $role,
            'PHONE' => $phone,
        ];
    }

    public function checkUser($table, $username, $password)
    {
        $sql = "SELECT * FROM {$table} WHERE
        USERNAME='{$username}' AND PASSWORD='{$password}'";
        return $this->rawQuery($sql);
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $user = $this->findById($username);

            if ($user->USERNAME == $username && $user->PASSWORD == $password) {
                $_SESSION['user'] = $user;
                if (3 != $user->ROLE) {
                    return 'Admin';
                } else {
                    return 'User';
                }
            }
        }
        return 'Fail';
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
    }

    public function register()
    {
        if (isset($_POST['add'])) {
            $this->setValue(md5($_POST['password']), $_POST['first_name'], $_POST['last_name'], '', '', '', 3, '');
            $checkId = $this->findById($_POST['username'], 'USERNAME');

            if (null != $checkId->USERNAME) {
                echo 'Username already!';
                // $_SESSION['notice_login'] = 'Tài khoản của bạn vừa được tạo!';
            } else {
                $this->fillable['USERNAME'] = $_POST['username'];
                $this->insert($this->fillable);
                $this->fillable = [];
                $_SESSION['notice_login'] = 'Tài khoản của bạn vừa được tạo!';
                return redirect('');
            }
        }
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $this->setValue(md5($_POST['password']), $_POST['firstName'], $_POST['lastName'], $_POST['address'], '', $_POST['email'], $_POST['role'], $_POST['phone']);

                $checkId = $this->findById($_POST['username'], 'USERNAME');
                if (null != $checkId->USERNAME) {
                    //echo 'Username already!';
                    $_SESSION['notice'] = 'Username đã tồn tại!';
                    redirect('admin/user/add');
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    $_SESSION['notice'] = 'Thêm Username thành công!';
                    redirect('admin/user');
                }
            } else {
                // Upload img
                $image = $this->uploadImages($_FILES['file']['name'], 'imagesUser');

                // Add user
                $this->setValue(md5($_POST['password']), $_POST['firstName'], $_POST['lastName'], $_POST['address'], $image, $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    $_SESSION['notice'] = 'Username đã tồn tại!';
                    redirect('admin/user');
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    $_SESSION['notice'] = 'Thêm Username thành công!';
                    redirect('admin/user');
                }
            }
        }
    }

    // Delete User
    public function deleteUser()
    {
        $username = $_GET['username'];
        $sql = "SELECT SHOP_ID FROM SHOP WHERE USERNAME='{$username}'";
        $shopIds = $this->rawQuery($sql);
        // dd($shopIds);
        $shop = new Shop;
        foreach ($shopIds as $shopId) {
            $shop->deleteShopById($shopId->SHOP_ID);
        }

        $tables = ['RATE', 'SAVE', 'COMMENT'];
        foreach ($tables as $table) {
            $sql = "DELETE FROM {$table} WHERE USERNAME='{$username}'";
            $this->rawQuery($sql);
        }
        $account = $this->findById($username);
        unlink('public/admin/assets/img/imagesUser/' . $account->IMAGE);
        $_SESSION['notice'] = 'Deleted Successful!';
        return $this->deleteById($username);
    }

    // Get User
    public function getUser($username)
    {
        $sql = "SELECT * FROM {$this->table} WHERE USERNAME='{$username}'";
        return $this->rawQuery($sql);
    }

    public function updateUser()
    {
        if (isset($_POST['add'])) {
            $account = $this->findById($_POST['username']);

            if ('' == $_POST['password']) {
                $_POST['password'] = $account->PASSWORD;
            } else {
                $_POST['password'] = md5($_POST['password']);
            }

            $image = $_FILES['file']['name'];

            if (null != $image) {
                unlink('public/admin/assets/img/imagesUser/' . $account->IMAGE);
                $_POST['urlImage'] = $this->uploadImages($image, 'imagesUser');
            }
            if (1 != $account->ROLE) {
                $_POST['role'] = $account->ROLE;
            }

            $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['urlImage'], $_POST['email'], $_POST['role'], $_POST['phone']);

            $this->updateById($_POST['username'], $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('admin/user');
        }
    }

    // Search User
    public function searchUser()
    {
        if (isset($_POST['ajaxKey'])) {
            $sql = "SELECT * FROM {$this->table} WHERE (USERNAME LIKE '%" . $_POST['ajaxKey'] . "%')";
            $users = [];
            $users['all'] = $this->rawQuery($sql);
            if (count($users['all']) != 0) {
                echo require 'app/views/admin/user/UsersTable.view.php';
            } else {
                echo '<h4 style="color:#a94442">Không tìm thấy kết quả!</h4>';
            }
        } else {
            $link = 'admin/user';
            $sql = "SELECT * from {$this->table} ";
            $selectAll = $this->rawQuery($sql);
            $countUser = count($selectAll);

            return $this->pagination($sql, $countUser, $link);
        }
    }

    public function forgotPassword()
    {
        if (isset($_POST['send'])) {
            $users = $this->findById($_POST['username'], '*');
            $newPassword = rand();
            $this->setValue(md5($newPassword), $users->FIRST_NAME, $users->LAST_NAME, $users->ADDRESS, $users->IMAGE, $users->EMAIL, $users->ROLE, $users->PHONE);
            $this->updateById($_POST['username'], $this->fillable);
            $this->mailer = new Mailer;
            $this->mailer->setEmailTo($users->EMAIL);
            $content = "Your new <strong>password</strong> is {$newPassword}";
            $this->mailer->setContent($content);
            $this->mailer->sendMail();
            redirect('');
        }
    }

    public function checkUserAlready()
    {
        $key = $_POST['ajaxKey'];
        $sql = "SELECT USERNAME FROM {$this->table} WHERE USERNAME='$key'";
        $checkAlready = $this->rawQuery($sql);

        if ($checkAlready[0]->USERNAME == $key) {
            echo '<span style="color:#a94442;">Username đã tồn tại</span>';
        }
    }

    // Public
    public function detailUser()
    {
        return $this->findById($_SESSION['user']->USERNAME);
    }

    public function updateUserInfo()
    {
        if (isset($_POST['edit'])) {
            $account = $this->findById($_SESSION['user']->USERNAME);
            $this->setValue($account->PASSWORD, $_POST['firstName'], $_POST['lastName'], $_POST['address'], $account->IMAGE, $_POST['email'], $account->ROLE, $_POST['phone']);
            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('profile');
        }
    }

    public function editUserPassword()
    {
        if (isset($_POST['edit'])) {
            $account = $this->findById($_SESSION['user']->USERNAME);
            $this->setValue(md5($_POST['password']), $account->FIRST_NAME, $account->LAST_NAME, $account->ADDRESS, $account->IMAGE, $account->EMAIL, $account->ROLE, $account->PHONE);
            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('editUserPassword');
        }
    }

    public function editUserImage()
    {
        // Upload img
        if (isset($_POST['ajaxImages'])) {
            $account = $this->findById($_SESSION['user']->USERNAME);

            $link = 'public/admin/assets/img/imagesUser/';
            unlink($link . $account->IMAGE);
            $img = $_POST['ajaxImages']; // Your data 'data:image/png;base64,AAAFBfj42Pj4';
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            $image = 'image-' . time() . '.png';
            file_put_contents($link . $image, $data);

            $this->setValue($account->PASSWORD, $account->FIRST_NAME, $account->LAST_NAME, $account->ADDRESS, $image, $account->EMAIL, $account->ROLE, $account->PHONE);
            $_SESSION['user']->IMAGE = $image;

            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            echo '<img src=' . $_POST['ajaxImages'] . ' alt="..." />';
        }
    }

    public function saveShopId()
    {
        $sql = "SELECT `SHOP`.*, (SELECT COUNT(`COMMENT`.SHOP_ID) FROM `COMMENT` WHERE `COMMENT`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'COMMENTS', (SELECT AVG(`RATE`.SCORE) FROM `RATE` WHERE `RATE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SCORE', (SELECT COUNT(`SAVE`.SHOP_ID) FROM `SAVE` WHERE `SAVE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SAVED' FROM SHOP JOIN SAVE ON SHOP.SHOP_ID=SAVE.SHOP_ID WHERE STATUS = 1 AND SAVE.USERNAME='{$_SESSION['user']->USERNAME}'";
        return $this->rawQuery($sql);
    }
}
