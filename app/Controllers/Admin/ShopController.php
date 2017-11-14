<?php
namespace App\Controllers\Admin;

use App\Models\Comment;
use App\Models\Rate;
use App\Models\Save;
use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class ShopController
{
    protected $shop, $shopType, $type, $comment;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if ($_SESSION['user']->ROLE < 3) {
            $this->shop = new Shop;
            $this->shopType = new Shop_Type;
            $this->type = new Type;
            $this->comment = new Comment;
            $this->rate = new Rate;
            $this->save = new Save;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $shop = $this->shop->shopConnectToType();
        return view('admin/shop/index', compact('shop'));
    }

    public function add()
    {
        $types = $this->type->selectAll();
        return view('admin/shop/create', compact('types'));
    }

    public function addPost()
    {
        $this->shop->insertShop();
        $shop = $this->shop->selectKey();
        $shop = $shop[0]->MAX_ID;
        $type = $_POST['type'];
        // die($type);
        $this->shopType->add($shop, $type);
        $_SESSION['notice'] = 'Thêm thành công!';
        return redirect('admin/shop');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $shop = $this->shop->selectByKey($id);
        // die(var_dump($shop[0]));
        $shop = $shop[0];
        $types = $this->type->selectAll();
        //die(var_dump($shop));
        return view('admin/shop/edit', compact('shop', 'types'));
    }

    public function editPost()
    {

        $this->shop->update();
        $this->shopType->update($_GET['id'], $_POST['type']);
        $_SESSION['notice'] = 'Sửa thành công!';
        return redirect('admin/shop');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->shop->deleteShopById($id);

        $_SESSION['notice'] = 'Xóa thành công!';
        return redirect('admin/shop');
    }

    public function searchshop()
    {
        $this->shop->search();
    }

    public function ajaxDiscount()
    {
        $this->shop->updateDiscount();
    }

    public function loadComments()
    {
        $id = $_GET['id'];
        if (isset($_SESSION['idshop'])) {
            $id = $_SESSION['idshop'];
            unset($_SESSION['idshop']);
        }
        $comments = $this->comment->load($id);
        $shop = $this->shop->selectByKey($id);
        $shop = $shop[0];
        // die(var_dump($shop));
        return view('admin/shop/comments', compact('comments', 'shop'));
    }

    public function deleteComment()
    {
        $this->comment->deleteComment();
        $_SESSION['notice'] = 'Xóa thành công!';
        return redirect('admin/shop/comment');
    }
}
