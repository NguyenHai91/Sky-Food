<?php

namespace App\Models;

use App\Models\Model;

class IndexAdmin extends Model
{
    public function indexAdmin()
    {
        $sql = "SELECT (SELECT COUNT(`SHOP`.SHOP_ID) FROM `SHOP`) AS 'SHOP',
                       (SELECT COUNT(`ACCOUNT`.USERNAME) FROM `ACCOUNT`) AS 'ACCOUNT',
                       (SELECT COUNT(`TYPE`.TYPE_ID) FROM `TYPE`) AS 'TYPE',
                       (SELECT COUNT(`FEEDBACK`.FEEDBACK_ID) FROM `FEEDBACK`) AS 'FEEDBACK'";
        return $this->rawQuery($sql);
    }
}
