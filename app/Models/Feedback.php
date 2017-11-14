<?php

namespace App\Models;

use App\Models\Model;

class Feedback extends Model
{
    protected $table = 'FEEDBACK';
    protected $primaryKey = 'FEEDBACK_ID';
    protected $fillable = [];

    public function selectAll()
    {
        return $this->all();
    }

    public function setValue($name, $phone, $email, $content)
    {
        $this->fillable = [
            'NAME' => $name,
            'PHONE' => $phone,
            'EMAIL' => $email,
            'CONTENT' => $content,
        ];
    }

    public function deleteItem($id)
    {
        return $this->deleteById($id);
    }

    public function searchFeedback()
    {
        if (isset($_POST['ajaxKey'])) {
            $sql = "SELECT FEEDBACK_ID, NAME, EMAIL, PHONE, CONTENT FROM FEEDBACK WHERE (CONTENT LIKE '%" . $_POST['ajaxKey'] . "%')";
            return $this->rawQuery($sql);
        }
    }

    public function createFeedback($name, $phone, $email, $content)
    {
        $this->setValue($name, $phone, $email, $content);
        return $this->insert($this->fillable);
    }
}
