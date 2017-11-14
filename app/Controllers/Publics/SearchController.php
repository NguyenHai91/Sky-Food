<?php

namespace App\Controllers\Publics;

use App\Models\Shop;
use App\Models\Type;

class SearchController
{
    protected $type;
    protected $shop;

    public function __construct()
    {
        $this->type = new Type;
        $this->shop = new Shop;
    }

    public function index()
    {
        $types = $this->type->selectAll();
        return view('public/search/index', compact('types', 'searchNameShop'));
    }

    public function search()
    {
        $name = $_GET['ajaxKey'];
        $type = $_GET['type'];
        $sortBy = $_GET['sortBy'];
        // if ('' == $name) {
        //     return;
        // }

        $shops = $this->shop->searchNameShop($name, $type, $sortBy);
        return view('public/search/searchShopTable', compact('shops'));
    }
}
