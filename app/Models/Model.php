<?php

namespace App\Models;

use Core\App;

class Model
{

    protected $table = '';
    protected $primaryKey = 'id';
    protected $db = null;

    public function __construct()
    {
        $this->db = App::get('database');
    }

    public function rawQuery($sql, $param = '')
    {
        //die($id);
        return $this->db->execute($sql, $param);
    }

    public function all($fields = '*')
    {
        $sql = "SELECT {$fields} FROM {$this->table}";
        return $this->rawQuery($sql);
    }

    public function insert($params)
    {
        $sql = "INSERT INTO {$this->table} (";
        foreach ($params as $key => $value) {
            $sql .= "$key, ";
        }
        $sql = substr($sql, 0, -2) . ') VALUES (';
        foreach ($params as $key => $value) {
            $sql .= "'$value', ";
        }
        $sql = substr($sql, 0, -2) . ')';
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function updateById($id, $params)
    {
        // UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;
        $sql = "UPDATE {$this->table} SET ";
        foreach ($params as $key => $value) {
            $sql .= "`{$key}` = \"{$value}\",";
        }
        $sql = trim($sql, ',');
        $sql .= " WHERE $this->primaryKey = '{$id}'";
        // die($sql);
        return $this->rawQuery($sql);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";
        //echo $sql;
        return $this->rawQuery($sql, $param);
    }

    public function findById($id, $fields = '*')
    {
        $sql = "SELECT {$fields} FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";
        $models = $this->rawQuery($sql);
        if (count($models) > 0) {
            return $models[0];
        }
        return (object) [];
    }

    public function pagination($query, $countUser, $link, $orderBy = 0, $key = '')
    {

        if ('' == $key) {
            $key = $this->primaryKey;
        }
        //die($key);
        $total = $countUser;
        //Find limit and current page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        // echo $_GET['page'];
        $limit = 5;
        // echo $limit;
        $totalPage = ceil($total / $limit);

        // Limit currentPage from 1 to totalPage
        if ($currentPage > $totalPage) {
            $currentPage = $totalPage;
        }
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        //  Find Start
        $start = ($currentPage - 1) * $limit;

        //echo $start;
        $sql = $query;

        if (1 == $orderBy) {
            $sql .= " ORDER BY {$key} DESC ";
        }
        $sql .= " LIMIT {$start},{$limit}";
        // echo $sql;
        //die($sql);
        $arrPagination = [];
        $arrPagination['all'] = $this->rawQuery($sql);
        $arrPagination['currentPage'] = $currentPage;
        $arrPagination['totalPage'] = $totalPage;
        $arrPagination['link'] = $link;

        return $arrPagination;
    }

    public function uploadImages($imageName, $link)
    {
        $splitArray = explode('.', $imageName);
        $extention = end($splitArray);
        $image = 'hinh-' . time() . '.' . $extention;
        $tmpName = $_FILES['file']['tmp_name'];
        $pathUpload = $_SERVER['DOCUMENT_ROOT'] . '/public/admin/assets/img/' . $link . '/' . $image;
        move_uploaded_file($tmpName, $pathUpload);
        return $image;
    }
}
