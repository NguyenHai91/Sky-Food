<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Shop;

class Type extends Model
{
    protected $table = 'TYPE';
    protected $primaryKey = 'TYPE_ID';

    public function setValue($type_name)
    {
        $this->fillable = ['TYPE_NAME' => $type_name];
    }

    public function selectAll()
    {
        return $this->all();
    }

    public function addType()
    {
        if (isset($_POST['add'])) {
            $this->setValue($_POST['nameCategory']);
            $this->insert($this->fillable);
            redirect('admin/type');
        }
    }

    public function getType($typeId)
    {
        $type = $this->findById($typeId);
        return $type;
    }

    public function editType()
    {
        if (isset($_POST['update'])) {
            $this->setValue($_POST['type_name']);
            $this->updateById($_POST['type_id'], $this->fillable);
            redirect('admin/type');
        }
    }

    public function deleteType($id)
    {
        $this->deleteById($id);
        $sql = "SELECT SHOP_ID FROM TYPE_SHOP WHERE TYPE_ID = '{$id}'";
        $listShopId = $this->rawQuery($sql);
        // dd($listShopId);
        $shop = new Shop;
        // $shopType->delete();
        foreach ($listShopId as $shopId) {
            $shop->deleteShopById($shopId->SHOP_ID);
        }
    }
}
