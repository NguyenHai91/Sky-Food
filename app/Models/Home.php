<?php

namespace App\Models;

use App\Models\Model;

class Home extends Model
{
    protected $tableShop = 'SHOP';
    protected $tableRate = 'RATE';
    public function interestedShop()
    {

        $sql = "SELECT `SHOP`.*, (SELECT COUNT(`COMMENT`.SHOP_ID) FROM `COMMENT` WHERE `COMMENT`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'COMMENTS', (SELECT AVG(`RATE`.SCORE) FROM `RATE` WHERE `RATE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SCORE', (SELECT COUNT(`SAVE`.SHOP_ID) FROM `SAVE` WHERE `SAVE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SAVED' FROM SHOP WHERE STATUS = 1 ORDER BY `SCORE` DESC LIMIT 8 OFFSET 0";

        return $this->rawQuery($sql);
    }

    public function latestShop()
    {
        $sql = "SELECT `SHOP`.*, (SELECT COUNT(`COMMENT`.SHOP_ID) FROM `COMMENT` WHERE `COMMENT`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'COMMENTS', (SELECT AVG(`RATE`.SCORE) FROM `RATE` WHERE `RATE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SCORE', (SELECT COUNT(`SAVE`.SHOP_ID) FROM `SAVE` WHERE `SAVE`.SHOP_ID = `SHOP`.`SHOP_ID`) AS 'SAVED' FROM SHOP WHERE STATUS = 1 ORDER BY SHOP_ID DESC LIMIT 8 OFFSET 0";

        return $this->rawQuery($sql);
    }
}
