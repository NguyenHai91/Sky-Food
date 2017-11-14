<?php

namespace App\Models;

use App\Models\Model;

class Shop_Type extends Model
{
    protected $table = 'TYPE_SHOP';
    public function add($shop, $type)
    {
        $shopType['SHOP_ID'] = $shop;
        $shopType['TYPE_ID'] = $type;
        //die(var_dump($shopType));
        return $this->insert($shopType);
    }

    public function update($shop, $type)
    {
        $sql = "UPDATE {$this->table} SET TYPE_ID={$type} WHERE SHOP_ID={$shop}";
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function delete($shop_id)
    {
        $sql = "DELETE FROM {$this->table} WHERE SHOP_ID = '{$shop_id}'";
        return $this->rawQuery($sql);
    }

    public function deleteShopTypeByShop($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE SHOP_ID={$id}";
        return $this->rawQuery($sql);
    }
}
