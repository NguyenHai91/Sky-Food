<?php

namespace App\Models;

use App\Models\Model;

class Save extends Model
{
    protected $table = 'SAVE', $primaryKey = 'SAVE_ID';

    public function check($id)
    {
        $sql = "SELECT count(USERNAME) AS test FROM SAVE WHERE USERNAME='{$_SESSION['user']->USERNAME}' AND SHOP_ID={$id}";
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function addSave()
    {
        $save['USERNAME'] = $_SESSION['user']->USERNAME;
        $save['SHOP_ID'] = $_POST['aid'];
        $this->insert($save);
        //echo 'saveAjax("//shop//ajaxSave")';
        echo " <input  data-toggle='modal'  type='submit' class= 'btn btn-bg' value='Unsave' onclick='saveAjax(" . '"/shop/ajaxUnsave"' . ',' . $_POST['aid'] . ",1);' />";
    }

    public function deleteSave()
    {
        //echo $sql;
        $sql = "DELETE FROM SAVE WHERE USERNAME='{$_SESSION['user']->USERNAME}' AND SHOP_ID='{$_POST['aid']}'";
        $this->rawQuery($sql);
        echo " <input  data-toggle='modal'   type='submit' class= 'btn btn-bg' value='Save' onclick='saveAjax(" . '"/shop/ajaxSave"' . ', ' . $_POST['aid'] . ",0);' />";
        //echo 'saveAjax("//shop//ajaxSave")';
    }

    public function deleteSaveByShop($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE SHOP_ID={$id}";
        return $this->rawQuery($sql);
    }
}
