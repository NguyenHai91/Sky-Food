<?php

namespace App\Controllers\Admin;

use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;
use Core\App;

class TypeController
{
    protected $type;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if ($_SESSION['user']->ROLE < 3) {
            $this->type = new Type;
            $this->shop_type = new Shop_Type;
            $this->shop = new Shop;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $types = $this->type->selectAll();
        return view('admin/type/index', compact('types'));
    }

    public function add()
    {
        return view('admin/type/add');
    }

    public function addType()
    {
        $this->type->addType();
    }

    public function edit()
    {
        $type = $this->type->getType($_GET['TYPE_ID']);
        return view('admin/type/edit', compact('type'));
    }

    public function editType()
    {
        $this->type->editType();
    }

    public function deleteType()
    {
        $this->type->deleteType($_GET['id']);

        redirect('admin/type');
    }
}
