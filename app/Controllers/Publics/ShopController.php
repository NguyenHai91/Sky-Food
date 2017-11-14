<?php

namespace App\Controllers\Publics;

use App\Models\Comment;
use App\Models\Rate;
use App\Models\Save;
use App\Models\Shop;
use Core\App;

class ShopController
{
    protected $shop;
    public function __construct()
    {
        $this->shop = new Shop;
        $this->save = new Save;
        $this->rate = new Rate;
        $this->comment = new Comment;
    }

    public function index()
    {
        $id = $_GET['id'];
        $comments = $this->comment->selectByShop($id);
        $shop = $this->shop->selectByKeyPublic($id);
        //die(var_dump($shop));
        $id_type = $shop[0]->TYPE_ID;
        //die($id_type);
        $otherShops = $this->shop->selectShopByType($id_type);
        $checkLogin = $this->verify();
        $check = 0;
        $checkRate = '';
        if (isset($_SESSION['user'])) {
            $check = $this->save->check($id);
            $checkRate = $this->rate->check($id);
            //die(var_dump($check));
            if ($check[0]->test > 0) {
                $check = 1;
            } else {
                $check = 0;
            }
            if ($checkRate[0]->test > 0) {
                $checkRate = 1;
            } else {
                $checkRate = 0;
            }
        }
        // die(var_dump($shop));
        $avg = $shop[0]->AVG . '';
        if ('' == $avg) {
            $avg = 0;
        }
        $avg = number_format($avg, 1);
        //die($avg);
        //
        //die(var_dump($_SESSION['user']));
        return view('public/detail/index', compact('shop', 'check', 'checkRate', 'comments', 'checkLogin', 'avg', 'otherShops'));
    }

    public function verify()
    {
        if (!isset($_SESSION['user'])) {
            return 0;
        }
        return 1;
    }

    public function ajaxSave()
    {

        $this->save->addSave();
    }

    public function ajaxUnsave()
    {
        //echo 'a';
        $this->save->deleteSave();
    }

    public function rate()
    {
        //echo $_POST[''];
        $this->rate->addRate();
    }

    public function updateRate()
    {

        // die($_SESSION['rate']);
        $this->rate->updateRate();
        //
    }

    public function ajaxComment()
    {
        $this->comment->ajaxComment();
    }
}
